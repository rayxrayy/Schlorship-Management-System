// // HTML to Excel
// function html_table_to_excel(type)
//     {
//         var data = document.getElementById('category_data');

//         var file = XLSX.utils.table_to_book(data, {sheet: "sheet1"});

//         XLSX.write(file, { bookType: type, bookSST: true, type: 'base64' });

//         XLSX.writeFile(file, 'file.' + type);
//     }



// //print bill from order page
// // function printDiv(divName) {
// //     var printContents = document.getElementById(divName).innerHTML;
// //     var originalContents = document.body.innerHTML;

// //     document.body.innerHTML = printContents;

// //     window.print();

// //     document.body.innerHTML = originalContents;
// // }





document.addEventListener("DOMContentLoaded", function() {
    const inputBox = document.getElementById("input-box");
    const resultBox = document.getElementById("result-box");
    const autocompleteResults = document.getElementById("autocomplete-results");

    // Static autocomplete suggestions
    const autocompleteData = ["Apple", "Banana", "Orange", "Pineapple", "Mango", "Grapes", "Watermelon"];

    inputBox.addEventListener("input", function() {
        const inputValue = inputBox.value.trim();

        if (inputValue.length > 0) {
            // Clear previous results
            autocompleteResults.innerHTML = "";

            // Display autocomplete results
            autocompleteData.forEach(function(result) {
                if (result.toLowerCase().startsWith(inputValue.toLowerCase())) {
                    const li = document.createElement("li");
                    li.textContent = result;
                    autocompleteResults.appendChild(li);
                }
            });

            // Show the result box
            resultBox.style.display = "block";
        } else {
            // Hide the result box if input is empty
            resultBox.style.display = "none";
        }
    });

    // Hide result box when clicking outside the search box
    document.addEventListener("click", function(event) {
        if (!resultBox.contains(event.target) && event.target !== inputBox) {
            resultBox.style.display = "none";
        }
    });

    // Update input box value when clicking on an autocomplete result
    autocompleteResults.addEventListener("click", function(event) {
        if (event.target.tagName === "LI") {
            inputBox.value = event.target.textContent;
            resultBox.style.display = "none";
        }
    });
});
