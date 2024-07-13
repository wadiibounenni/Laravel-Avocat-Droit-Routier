<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InfractionCode;
use Illuminate\support\carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class InfractionCodeController extends Controller
{
    public function ListeInfractions(){

        $infractions = InfractionCode::latest()->get();
        return view('admin.infractions_code.liste_infractions_code',compact('infractions'));
}

public function AjouterInfraction(){
    return view('admin.infractions_code.ajouter_infraction_code');
}

public function StoreInfraction(Request $request)
{
    $validator = Validator::make($request->all(), [
        'titre' => 'required',
        'image_infraction' => 'nullable|image|mimes:jpeg,png,jpg,gif', 
    ], [
        'titre.required' => 'Le titre de l\'infraction au code de la route est requis',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $save_url = null; // Initialize variable to store image path

    if ($request->hasFile('image_infraction')) {
        $image = $request->file('image_infraction');

        // Generate a unique name for the image
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

        // Create an image resource from the uploaded file
        $uploadedImage = imagecreatefromstring(file_get_contents($image->getPathname()));

        // Create a blank image with the desired dimensions
        $resizedImage = imagecreatetruecolor(600, 400);

        // Resize the uploaded image
        imagecopyresampled($resizedImage, $uploadedImage, 0, 0, 0, 0, 600, 400, imagesx($uploadedImage), imagesy($uploadedImage));

        // Save the resized image to a temporary location
        $tempPath = 'upload/infraction/' . $name_gen;
        imagejpeg($resizedImage, $tempPath);

        // Save the resized image to the storage location
        $path = 'upload/infraction/' . $name_gen;
        Storage::put($path, file_get_contents($tempPath));

        // Clean up resources
        imagedestroy($uploadedImage);
        imagedestroy($resizedImage);

        // Assign image path if image was uploaded
        $save_url = $path;
    }

     // Generate the slug
    $slug = Str::slug($request->titre); // This line generates the slug

    InfractionCode::create([
        'titre' => $request->titre,
        'slug' => $slug, // Assign the generated slug
        'description' => $request->description,
        'meta_titre' => $request->meta_titre,
        'meta_description' => $request->meta_description,
        'image_infraction' => $save_url,
    ]);

    // Notification message
    $notification = [
        'message' => 'Infraction au code de la route ajoutée avec succès',
        'alert-type' => 'success'
    ];

    return redirect()->route('liste.infractions.code')->with($notification);
}//end method

public function EditerInfraction($id){
    $infractioncode = InfractionCode::findOrFail($id);
   return view('admin.infractions_code.editer_infraction_code',compact('infractioncode'));

} // End Method

public function UpdateInfraction(Request $request){
$infraction_id = $request->id;

// Check if a new image is uploaded
if ($request->hasFile('image_infraction')) {
    $image = $request->file('image_infraction');
    $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // Generate a unique name for the image

    // Create an image resource from the uploaded file
    $uploadedImage = imagecreatefromstring(file_get_contents($image->getPathname()));

    // Create a blank image with the desired dimensions
    $resizedImage = imagecreatetruecolor(600, 400);

    // Resize the uploaded image
    imagecopyresampled($resizedImage, $uploadedImage, 0, 0, 0, 0, 600, 400, imagesx($uploadedImage), imagesy($uploadedImage));

    // Save the resized image to a temporary location
    $tempPath = 'upload/infraction/' . $name_gen;
    imagejpeg($resizedImage, $tempPath);

    // Save the resized image to the storage location
    $path = 'upload/infraction/' . $name_gen;
    Storage::put($path, file_get_contents($tempPath));

    // Clean up resources
    imagedestroy($uploadedImage);
    imagedestroy($resizedImage);

    // Assign image path if image was uploaded
    $save_url = $path;

    $slug = Str::slug($request->titre); // This line generates the slug

    // Update the domaine with the new image
    InfractionCode::findOrFail($infraction_id)->update([
        'titre' => $request->titre,
        'slug' => $slug, // Assign the generated slug
        'description' => $request->description,
        'meta_titre' => $request->meta_titre,
        'meta_description' => $request->meta_description,
        'image_infraction' => $save_url,
    ]);

    $notification = [
        'message' => 'Infraction au code de la route mise à jour avec succés',
        'alert-type' => 'success'
    ];
} else {
    // Update the domaine without changing the image
    $slug = Str::slug($request->titre); // This line generates the slug
    InfractionCode::findOrFail($infraction_id)->update([
        'titre' => $request->titre,
        'slug' => $slug, // Assign the generated slug
        'description' => $request->description,
        'meta_titre' => $request->meta_titre,
        'meta_description' => $request->meta_description,
    ]);

    $notification = [
        'message' => 'Infraction au code de la route mise à jour avec succés',
        'alert-type' => 'success'
    ];
}

return redirect()->route('liste.infractions.code')->with($notification);
}//end method

public function SupprimerInfraction($id){

$infraction = InfractionCode::findOrFail($id);

// Check if the image exists before attempting to unlink
if (!is_null($infraction->image_infraction)) {
    unlink($infraction->image_infraction);
}

$infraction->delete();

$notification = array(
    'message' => 'Infraction au code de la route supprimée avec succès', 
    'alert-type' => 'success'
);

return redirect()->back()->with($notification);       

}// End Method

public function InfractionDetails($slug)

{
    // Retrieve the Domaine record based on the slug
    $infraction = InfractionCode::where('slug', $slug)->first();

    // Check if the record exists
    if (!$infraction) {
        abort(404); 
    }

    // Pass the $infraction variable to your view
    return view('frontend.infraction_code', compact('infraction'));
}// End Method 


public function ListeInfractionsCode(){

        $infractions = InfractionCode::latest()->get();
        return view('frontend.infractions_code_sidebar',compact('infractions'));
}//end method

}


