const password = prompt("Please enter a new password");




// Password must be 6+ characters
if (password.length >= 6) {
    console.log("Password is valid")
} else {
    console.log("Password is invalid. Must be at least 6 characters")
}
// Password cannot include space

if(password.indexOf('') === -1) {
    console.log("You don't have a space. Good job")
} else