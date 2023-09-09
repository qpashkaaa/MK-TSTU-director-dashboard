let locStor = localStorage.getItem('login');
document.getElementById('login').innerHTML = locStor;
let click = false;

function getID(id)
{
    if(click == false)
    {
    $("#td-" + id).fadeIn(500);
    setTimeout(function(){document.getElementById('td-'+id).style.display = 'block'},500);
    }
}

function hideID(id)
{
    if(click == false)
    {
    setTimeout(function(){document.getElementById('td-'+id).style.display = 'none'},500);

    }
}

function displayBlockButton(id)
{
    if (click == false)
        {
            click = true;
            document.getElementById('td-'+id).style.display = 'block'; 
            document.getElementById('chart_div').style.display = 'block';
            document.getElementById(id).style.backgroundColor = '#42aaff';
        }
    else
        {
            setTimeout(function(){click = false;},500);
            document.getElementById('td-'+id).style.display = 'none'; 
            document.getElementById(id).style.backgroundColor = 'white';
        }
}