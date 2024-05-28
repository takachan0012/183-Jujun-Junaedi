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

function listCustomerDebt() {
    const customerDebtRadio = document.querySelector('input[aria-label="Customer Debt"]');
    customerDebtRadio.checked = true;
}

function listMyDebt() {
    const MyDebtRadio = document.querySelector('input[aria-label="My Debt"]');
    MyDebtRadio.checked = true;
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth',
            block: 'center'
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    // Add click event listener to each row with data-href attribute
    document.querySelectorAll('tr[data-href]').forEach(row => {
        row.addEventListener('click', () => {
            window.location.href = row.dataset.href;
        });
    });


    const numberInput = document.getElementById('currencyInput');
    numberInput.addEventListener('input', function () {
        // Format the input value
        formatCurrencyInput(numberInput);
    });

    // Get the textarea element
    const textarea = document.querySelector('textarea[name="note"]');

    // Function to adjust the height of the textarea
    const adjustHeight = () => {
        textarea.style.height = 'auto'; // Reset the height
        textarea.style.height = `${textarea.scrollHeight}px`; // Set the height to the scrollHeight
    };

    // Adjust the height on input
    textarea.addEventListener('input', adjustHeight);

    // Adjust the height when the Enter key is pressed
    textarea.addEventListener('keydown', (event) => {
        if (event.key === 'Enter') {
            adjustHeight();
        }
    });

    // Initial adjustment
    adjustHeight();

    // Set the default date value
    const dateInput = document.getElementById('dateInput');
    const today = new Date();
    const year = today.getFullYear();
    const month = String(today.getMonth() + 1).padStart(2, '0'); // Months are zero-indexed
    const day = String(today.getDate()).padStart(2, '0');
    const formattedDate = `${year}-${month}-${day}`;
    dateInput.value = formattedDate;

    // Add event listener to form submit
    document.getElementById('form').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent form from submitting
        showToast();
        setTimeout(function () {
            event.target.submit(); // Submit the form after showing the toast
            navigationBack();
        }, 3000); // Adjust the delay as needed to match the toast display time
    });

});

function formatCurrencyInput(input) {
    const value = input.value.replace(/[^0-9]/g, ''); // Remove any non-digit characters
    if (value.length > 0) {
        const formattedValue = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
        }).format(value);
        input.value = formattedValue;
    } else {
        input.value = '';
    }
}

function navigationBack() {
    window.history.back();
}

function showToast() {
    const toastContainer = document.getElementById('toast-container');
    toastContainer.classList.remove('hidden');
}





export { togglePasswordVisibility, listCustomerDebt, listMyDebt, navigationBack };