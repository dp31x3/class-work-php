
// Get the check-all boxes element
const checkAllCheckbox = document.getElementById("check-all");

// Get all the option checkboxes
const optionCheckboxes = document.querySelectorAll(".option");

// Add a change event listener to the check-all checkbox
checkAllCheckbox.addEventListener("change", function() {
    // Toggle the checked state of all the option checkboxes
    optionCheckboxes.forEach(function(checkbox) {
        checkbox.checked = checkAllCheckbox.checked;
    });
});
