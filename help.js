<script>
function phonenumber(inputtxt)
{
 var phoneno= /^\d{10}$/;
 if(input txt.value.match(phoneno))
 	{
                return ture;
        }
 else 
        {
        alert("not a valid phone number");
        return false;
        }
}
const checkbox = document.querySelector('.my-form input[type="checkbox"]');
const btns = document.querySelectorAll(".my-form button");

checkbox.addEventListener("change", function() {
  const checked = this.checked;
  for (const btn of btns) {
    checked ? (btn.disabled = false) : (btn.disabled = true);
  }
});
</script>
