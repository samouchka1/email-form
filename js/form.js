const emailForm = document.getElementById('email-form');
const responseDiv = document.getElementById('response');

emailForm.addEventListener('submit', function(event) {
  event.preventDefault();

  const emailInput = document.getElementById('email-input');
  const email = emailInput.value;

  fetch('/api/form.php', {
    method: 'POST',
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({ email: email })
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      responseDiv.textContent = 'Thanks for signing up!';
      emailInput.value = '';
    } else {
        console.log('failed')
      responseDiv.textContent = 'Error: ' + data.message;
    }
  })
  .catch(error => {
    responseDiv.textContent = 'Error: ' + error.message;
  });
});