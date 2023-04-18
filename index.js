    function displayDateTime() {
        const now = new Date();
        const dateOptions = {weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'};
        const timeOptions = {hour: '2-digit', minute: '2-digit', second: '2-digit'};
        const date = now.toLocaleDateString('en-US', dateOptions);
        const time = now.toLocaleTimeString('en-US', timeOptions);
        document.getElementById('current-date-time').innerHTML = `${date} ${time}`;
        setInterval(displayDateTime, 1000)
    }
    displayDateTime();

    const dogCat = document.getElementById("cat/dog");
    const bread = document.getElementById("breed");
    const age = document.getElementById("age");
    const gender = document.getElementById("gender");
    const brag = document.getElementById("brag");
    const name = document.getElementById("name");
    const email = document.getElementById("email");

    function Check() {
        let emailCheck = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (!dogCat.value) {
            alert("Please fill cat or dog section");
            return;
        }  if (!bread.value) {
            alert("Please fill the bread section");
            return;
        }  if (!age.value) {
            alert("Please fill the age section");
            return;
        }  if (!gender.value) {
            alert("Please fill the gender section");
            return;
        }  if (!brag.value) {
            alert("Please fill the brag section");
            return;
        }  if (!name.value) {
            alert("Please fill in your name");
            return;
        }  if (!emailCheck.test(email.value) || !email.value) {
            alert("invalid email");
            return;
        }
    }
