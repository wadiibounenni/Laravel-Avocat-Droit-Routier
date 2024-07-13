<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DomaineIntervention;
use Illuminate\support\carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class DomaineInterventionController extends Controller
{
    public function ListeDomaines(){

        $domaines = DomaineIntervention::latest()->get();
        return view('admin.domaine_intervention.liste_domaines_intervention',compact('domaines'));
}
    public function AjouterDomaine(){
        return view('admin.domaine_intervention.ajouter_domaine_intervention');
    }

    public function storeDomaine(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titre' => 'required',
            'image_intervention' => 'nullable|image|mimes:jpeg,png,jpg,gif', 
        ], [
            'titre.required' => 'Le titre de domaine d\'intervention est requis',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $save_url = null; // Initialize variable to store image path
    
        if ($request->hasFile('image_intervention')) {
            $image = $request->file('image_intervention');
    
            // Generate a unique name for the image
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
    
            // Create an image resource from the uploaded file
            $uploadedImage = imagecreatefromstring(file_get_contents($image->getPathname()));
    
            // Create a blank image with the desired dimensions
            $resizedImage = imagecreatetruecolor(600, 400);
    
            // Resize the uploaded image
            imagecopyresampled($resizedImage, $uploadedImage, 0, 0, 0, 0, 600, 400, imagesx($uploadedImage), imagesy($uploadedImage));
    
            // Save the resized image to a temporary location
            $tempPath = 'upload/intervention/' . $name_gen;
            imagejpeg($resizedImage, $tempPath);
    
            // Save the resized image to the storage location
            $path = 'upload/intervention/' . $name_gen;
            Storage::put($path, file_get_contents($tempPath));
    
            // Clean up resources
            imagedestroy($uploadedImage);
            imagedestroy($resizedImage);
    
            // Assign image path if image was uploaded
            $save_url = $path;
        }

         // Generate the slug
        $slug = Str::slug($request->titre); // This line generates the slug
    
        DomaineIntervention::create([
            'titre' => $request->titre,
            'slug' => $slug, // Assign the generated slug
            'description' => $request->description,
            'meta_titre' => $request->meta_titre,
            'meta_description' => $request->meta_description,
            'image_intervention' => $save_url,
        ]);
    
        // Notification message
        $notification = [
            'message' => 'Domaine d\'Intervention ajoutée avec succès',
            'alert-type' => 'success'
        ];
    
        return redirect()->route('liste.domaine.intervention')->with($notification);
    }//end method

    public function Editerdomaine($id){
        $domaineintervention = DomaineIntervention::findOrFail($id);
       return view('admin.domaine_intervention.editer_domaine_intervention',compact('domaineintervention'));

   } // End Method

   public function UpdateDomaine(Request $request){
    $domaine_id = $request->id;

    // Check if a new image is uploaded
    if ($request->hasFile('image_intervention')) {
        $image = $request->file('image_intervention');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // Generate a unique name for the image

        // Create an image resource from the uploaded file
        $uploadedImage = imagecreatefromstring(file_get_contents($image->getPathname()));

        // Create a blank image with the desired dimensions
        $resizedImage = imagecreatetruecolor(600, 400);

        // Resize the uploaded image
        imagecopyresampled($resizedImage, $uploadedImage, 0, 0, 0, 0, 600, 400, imagesx($uploadedImage), imagesy($uploadedImage));

        // Save the resized image to a temporary location
        $tempPath = 'upload/intervention/' . $name_gen;
        imagejpeg($resizedImage, $tempPath);

        // Save the resized image to the storage location
        $path = 'upload/intervention/' . $name_gen;
        Storage::put($path, file_get_contents($tempPath));

        // Clean up resources
        imagedestroy($uploadedImage);
        imagedestroy($resizedImage);

        // Assign image path if image was uploaded
        $save_url = $path;

        $slug = Str::slug($request->titre); // This line generates the slug

        // Update the domaine with the new image
        DomaineIntervention::findOrFail($domaine_id)->update([
            'titre' => $request->titre,
            'slug' => $slug, // Assign the generated slug
            'description' => $request->description,
            'meta_titre' => $request->meta_titre,
            'meta_description' => $request->meta_description,
            'image_intervention' => $save_url,
        ]);

        $notification = [
            'message' => 'Domaine d\'Intervention mis à jour avec succés',
            'alert-type' => 'success'
        ];
    } else {
        // Update the domaine without changing the image
        $slug = Str::slug($request->titre); // This line generates the slug
        DomaineIntervention::findOrFail($domaine_id)->update([
            'titre' => $request->titre,
            'slug' => $slug, // Assign the generated slug
            'description' => $request->description,
            'meta_titre' => $request->meta_titre,
            'meta_description' => $request->meta_description,
        ]);

        $notification = [
            'message' => 'Domaine d\'Intervention mis à jour avec succés',
            'alert-type' => 'success'
        ];
    }

    return redirect()->route('liste.domaine.intervention')->with($notification);
}

public function SupprimerDomaine($id){

    $domaine = DomaineIntervention::findOrFail($id);
    
    // Check if the image exists before attempting to unlink
    if (!is_null($domaine->image_intervention)) {
        unlink($domaine->image_intervention);
    }

    $domaine->delete();

    $notification = array(
        'message' => 'Domaine d\'intervention supprimé avec succès', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);       

}// End Method

public function DomaineDetails($slug)

{
    // Retrieve the Domaine record based on the slug
    $domaine = DomaineIntervention::where('slug', $slug)->first();

    // Check if the record exists
    if (!$domaine) {
        abort(404); 
    }

    // Pass the $domaine variable to your view
    return view('frontend.domaine_intervention', compact('domaine'));
}// End Method 



   
}