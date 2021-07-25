# firebasesetup
In key.json file replace your Firebase Credentials 
Install vendor folder using CLI
Run composer require google/cloud-firestore
Paste require('vendor/autoload.php') then paste use Google\Cloud\Firestore\FirestoreClient in Controller or Helper class
Create a function
function firestore()
{
    $db = new FirestoreClient([
        'projectId' => 'PROJECT ID HERE'
    ]);
    return $db;
} 