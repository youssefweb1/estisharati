// ========================== nav ==========================
const menuButton = document.getElementById('menu-button');
const menuIcon = document.getElementById('menu-icon');
const navbarCta = document.getElementById('navbar-cta');

menuButton.addEventListener('click', () => {
    navbarCta.classList.toggle('hidden');
    if (navbarCta.classList.contains('hidden')) {
        menuIcon.innerHTML = `
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
    `;
    } else {
        menuIcon.innerHTML = `
      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 2l13 13M2 15L15 2" />
    `;
    }
});



// ========================== dropdown ==========================
const button1 = document.getElementById('dropdownInformationButton1'); 
const button2 = document.getElementById('dropdownInformationButton2'); 
const dropdown = document.getElementById('dropdownInformation');

if (button1 && button2 && dropdown) {
    function toggleDropdown() {
        dropdown.classList.toggle('hidden');
    }

    button1.addEventListener('click', toggleDropdown);
    button2.addEventListener('click', toggleDropdown);

    document.addEventListener('click', function(event) {
        if (!button1.contains(event.target) && !button2.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.classList.add('hidden'); 
        }
    });
}




