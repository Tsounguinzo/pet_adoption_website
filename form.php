<?php
include("header.php");



// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $catOrDog = $_POST['catOrDog'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $dogs = isset($_POST['dogs']) ? 'Yes' : 'No';
    $cats = isset($_POST['cats']) ? 'Yes' : 'No';
    $brag = $_POST['brag'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Open the pet information file in append mode
    $file = fopen("pet_info.txt", "a");

    // Get the last ID in the file
    $lastId = 0;
    if (filesize("pet_info.txt") > 0) {
        $lines = file("pet_info.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $lastLine = end($lines);
        $lastId = explode(":", $lastLine)[0];
    }

    // Generate a new ID for the pet
    $newId = $lastId + 1;

    // Get the username of the pet owner
    $username = $_SESSION['username'];

    // Format the pet information as a line in the file
    $petInfo = "{$newId}:{$username}:{$catOrDog}:{$breed}:{$age}:{$gender}:{$dogs}:{$cats}:{$brag}";

    // Write the pet information to the file
    fwrite($file, "{$petInfo}\n");

    // Close the file
    fclose($file);

    // Redirect to the homepage
  /*  header('Location: index.php');
    exit(); */
}
?>

<section class="spacial">
    <form action="">
        <label for="cat/dog" class="form-text">cat or dog?</label>
        <select id="cat/dog" class="form-select">
            <option></option>
            <option>Cat</option>
            <option>Dog</option>
        </select>
        <br>
        <label for="breed" class="form-text">Your pet's Breed</label>
        <select id="breed" class="form-select">
            <option></option>
            <option>Doesn't matter</option>
            <option>bull dog</option>
            <option>mix breed</option>
        </select>
        <br>
        <label for="age" class="form-text">Your pet's age</label>
        <select id="age" class="form-select">
            <option></option>
            <option>Doesn't matter</option>
            <option>0 - 6 years</option>
            <option>7 - 9 years</option>
        </select>
        <br>
        <label for="gender" class="form-text">Your pet's Gender</label>
        <select id="gender" class="form-select">
            <option></option>
            <option>Doesn't matter</option>
            <option>Male</option>
            <option>Female</option>
        </select>
        <br>
        <label for="dogs" class="form-text">Get along with other dogs?</label>
        <input id="dogs" type="checkbox">
        <br>
        <label for="cats" class="form-text">Get along with other cats?</label>
        <input id="cats" type="checkbox">
        <br>
        <label for="brag" class="form-text">brag about your pet here below</label>
        <br> <textarea name="brag" id="brag" cols="30" rows="10"></textarea>
        <br>
        <label for="name" class="form-text">Enter your family and given name:</label>
        <input id="name" type="text">
        <br>
        <label for="email" class="form-text">Enter your active email:</label>
        <input id="email" type="text">
        <br>
        <br> <br>
        <button type="submit" title="Submit" onclick="Check()" class="btn">Submit</button>
        <button type="reset" title="Reset" class="btn">Reset</button>
        <br>
    </form>
</section>

<?php include "footer.php"; ?>
