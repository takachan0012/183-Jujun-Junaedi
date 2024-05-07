function togglePasswordVisibility() {
    var passwordField = document.getElementById('password');
    var passwordFieldType = passwordField.getAttribute('type');

    // Toggle the type attribute of the password field between 'password' and 'text'
    if (passwordFieldType === 'password') {
        passwordField.setAttribute('type', 'text');
        document.getElementsByClassName('opened-eye')[0].style.display = 'block';
        document.getElementsByClassName('closed-eye')[0].style.display = 'none';
    } else {
        passwordField.setAttribute('type', 'password');
        document.getElementsByClassName('opened-eye')[0].style.display = 'none';
        document.getElementsByClassName('closed-eye')[0].style.display = 'block';
    }
}

function showContent(contentNum) {
    // Hide all content paragraphs
    document.getElementById('content1').style.display = 'none';
    document.getElementById('content2').style.display = 'none';
    document.getElementById('content3').style.display = 'none';

    // Show the content paragraph corresponding to the clicked button
    document.getElementById('content' + contentNum).style.display = 'block';

    // Remove the red border from all buttons
    document.getElementById('button1').classList.remove('border-l-2', 'border-red-500', 'text-red-500');
    document.getElementById('button2').classList.remove('border-l-2', 'border-red-500', 'text-red-500');
    document.getElementById('button3').classList.remove('border-l-2', 'border-red-500', 'text-red-500');

    // Add the border left to the clicked button
    document.getElementById('button' + contentNum).classList.add('border-l-2', 'border-red-500', 'text-red-500');

}



export { togglePasswordVisibility, showContent };