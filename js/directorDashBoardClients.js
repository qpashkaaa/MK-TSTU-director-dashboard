let count = document.getElementById('inputTotal').value;
for(let i = 0;i<count;i++)
        {
            console.log(document.getElementById('order-div-status-'+i).innerHTML);
            if (document.getElementById('order-div-status-'+i).innerHTML == '1')
                {
                    document.getElementById('order-div-status-'+i).innerHTML = 'Выполнен';
                    document.getElementById('order-div-status-'+i).style.backgroundColor = '#00FF00';
                }
            else
                {
                    document.getElementById('order-div-status-'+i).innerHTML = 'В процессе';
                    document.getElementById('order-div-status-'+i).style.backgroundColor = '#FFFF00';
                }
        }

function openAndCloseOrders(id)
{
    if(document.getElementById(id + '-order').innerHTML == '')
    {
        document.getElementById(id + '-order').innerHTML = 'Заказы не найдены';
    }
    if(document.getElementById(id + '-order').style.display == 'none')
    {
        document.getElementById(id + '-order').style.display = 'table-cell';
        document.getElementById(id).style.backgroundColor = '#42aaff';
    }
    else
    {
        document.getElementById(id + '-order').style.display = 'none';
        document.getElementById(id).style.backgroundColor = 'white';
    }
}