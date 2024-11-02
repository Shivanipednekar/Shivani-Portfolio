document.addEventListener("DOMContentLoaded", function() {
    const nameElement = document.getElementById("name");
    const nameText = "Shivani";
    let index = 0;

    function type() {
        if (index < nameText.length) {
            nameElement.textContent += nameText.charAt(index);
            index++;
            setTimeout(type, 150); // Adjust typing speed by changing this value
        }
    }

    type();
});
