<?php
include("header.php");
?>
    <section class="spacial">
        <form >
            <h2>Find Your pet</h2>
            <label for="cat/dog" class="form-text">Is your pet a cat or a dog?</label>
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
            <label for="truth" class="form-text">check the box if your pet goes along with others!</label>
            <input id="truth" type="checkbox">
            <br> <br>
            <button type="submit" title="Submit" onclick="Check()" class="btn">Submit</button>
            <button type="reset" title="Reset" class="btn">Reset</button>
            <br>
        </form>
    </section>
<?php
include "footer.php";
?>