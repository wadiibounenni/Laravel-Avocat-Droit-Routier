<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\support\carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function ListeArticles(){

        $articles = Blog::latest()->get();
        return view('admin.blogs.liste_articles',compact('articles'));
}

public function PaginateArticles(){

    $articles = Blog::paginate(6);
    
    return view('frontend.blog_page', compact('articles'));
}

public function AjouterArticle(){
    return view('admin.blogs.ajouter_article');
}

public function StoreArticle(Request $request)
{
    $validator = Validator::make($request->all(), [
        'titre' => 'required',
        'image_article' => 'nullable|image|mimes:jpeg,png,jpg,gif', 
    ], [
        'titre.required' => 'Le titre de l\'article est requis',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $save_url = null; // Initialize variable to store image path

    if ($request->hasFile('image_article')) {
        $image = $request->file('image_article');

        // Generate a unique name for the image
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

        // Create an image resource from the uploaded file
        $uploadedImage = imagecreatefromstring(file_get_contents($image->getPathname()));

        // Create a blank image with the desired dimensions
        $resizedImage = imagecreatetruecolor(600, 400);

        // Resize the uploaded image
        imagecopyresampled($resizedImage, $uploadedImage, 0, 0, 0, 0, 600, 400, imagesx($uploadedImage), imagesy($uploadedImage));

        // Save the resized image to a temporary location
        $tempPath = 'upload/blog/' . $name_gen;
        imagejpeg($resizedImage, $tempPath);

        // Save the resized image to the storage location
        $path = 'upload/blog/' . $name_gen;
        Storage::put($path, file_get_contents($tempPath));

        // Clean up resources
        imagedestroy($uploadedImage);
        imagedestroy($resizedImage);

        // Assign image path if image was uploaded
        $save_url = $path;
    }

     // Generate the slug
    $slug = Str::slug($request->titre); // This line generates the slug

    Blog::create([
        'titre' => $request->titre,
        'slug' => $slug, // Assign the generated slug
        'description' => $request->description,
        'tags' => $request->tags,
        'meta_titre' => $request->meta_titre,
        'meta_description' => $request->meta_description,
        'image_article' => $save_url,
    ]);

    // Notification message
    $notification = [
        'message' => 'Article ajouté avec succès',
        'alert-type' => 'success'
    ];

    return redirect()->route('liste.articles')->with($notification);
}//end method

public function EditerArticle($id){
    $article = Blog::findOrFail($id);
   return view('admin.blogs.editer_article',compact('article'));

} // End Method

public function UpdateArticle(Request $request){
$article_id = $request->id;

// Check if a new image is uploaded
if ($request->hasFile('image_article')) {
    $image = $request->file('image_article');
    $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); // Generate a unique name for the image

    // Create an image resource from the uploaded file
    $uploadedImage = imagecreatefromstring(file_get_contents($image->getPathname()));

    // Create a blank image with the desired dimensions
    $resizedImage = imagecreatetruecolor(600, 400);

    // Resize the uploaded image
    imagecopyresampled($resizedImage, $uploadedImage, 0, 0, 0, 0, 600, 400, imagesx($uploadedImage), imagesy($uploadedImage));

    // Save the resized image to a temporary location
    $tempPath = 'upload/blog/' . $name_gen;
    imagejpeg($resizedImage, $tempPath);

    // Save the resized image to the storage location
    $path = 'upload/blog/' . $name_gen;
    Storage::put($path, file_get_contents($tempPath));

    // Clean up resources
    imagedestroy($uploadedImage);
    imagedestroy($resizedImage);

    // Assign image path if image was uploaded
    $save_url = $path;

    $slug = Str::slug($request->titre); // This line generates the slug

    // Update the domaine with the new image
    Blog::findOrFail($article_id)->update([
        'titre' => $request->titre,
        'slug' => $slug, // Assign the generated slug
        'description' => $request->description,
        'tags' => $request->tags,
        'meta_titre' => $request->meta_titre,
        'meta_description' => $request->meta_description,
        'image_article' => $save_url,
    ]);

    $notification = [
        'message' => 'Article mis à jour avec succés',
        'alert-type' => 'success'
    ];
} else {
    // Update the domaine without changing the image
    $slug = Str::slug($request->titre); // This line generates the slug
    Blog::findOrFail($article_id)->update([
        'titre' => $request->titre,
        'slug' => $slug, // Assign the generated slug
        'description' => $request->description,
        'tags' => $request->tags,
        'meta_titre' => $request->meta_titre,
        'meta_description' => $request->meta_description,
    ]);

    $notification = [
        'message' => 'Article mis à jour avec succés',
        'alert-type' => 'success'
    ];
}

return redirect()->route('liste.articles')->with($notification);
}

public function SupprimerArticle($id){

$article = Blog::findOrFail($id);

// Check if the image exists before attempting to unlink
if (!is_null($article->image_article)) {
    unlink($article->image_article);
}

$article->delete();

$notification = array(
    'message' => 'Article supprimé avec succès', 
    'alert-type' => 'success'
);

return redirect()->back()->with($notification);       

}// End Method

public function ArticleDetails($slug)

{
    // Retrieve the Domaine record based on the slug
    $article = Blog::where('slug', $slug)->first();

    // Check if the record exists
    if (!$article) {
        abort(404); 
    }

    // Pass the $infraction variable to your view
    return view('frontend.article_details', compact('article'));
}// End Method 

public function ArticlesRecents()
{
    // Fetch the latest 10 articles
    $articlesrecents = Blog::latest()->take(10)->get();

    // Pass articles to the view
    return view('frontend.article_details', compact('articlesrecents'));
}
}
