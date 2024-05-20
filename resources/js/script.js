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





export { togglePasswordVisibility, listCustomerDebt, listMyDebt, navigationBack };