function searchMenu() {
    // Get the input value and convert to lowercase
    const input = document.getElementById('menuSearch').value.toLowerCase();
    
    // Get all rows in the menu tables
    const rows = document.querySelectorAll('.main table tbody tr, .desserts table tbody tr');
  
    // Loop through the rows and hide those that don't match the search query
    rows.forEach(row => {
      const textContent = row.textContent.toLowerCase();
      if (textContent.includes(input)) {
        row.style.display = ''; // Show row
      } else {
        row.style.display = 'none'; // Hide row
      }
    });
  }