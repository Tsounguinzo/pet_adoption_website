<?php
include("header.php");
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
<?php
include "footer.php";
?>