function showInput()
{
    if(document.getElementById('register-Select').value == 'Сотрудник')
        {
            document.getElementById('number').style.display = 'block';
            document.getElementById('Post-input').value = '1';
        }
    else
        {
            document.getElementById('number').style.display = 'none';
            document.getElementById('Post-input').value = '0';
        }
}

function locStor()
{
    let login = document.getElementById('login').value;
    localStorage.setItem('login', login.toUpperCase());
}