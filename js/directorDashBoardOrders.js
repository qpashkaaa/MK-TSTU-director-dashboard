function showTableNowOrders()
{
    if (document.getElementById('now-works').style.display == 'block' || document.getElementById('complete-works').style.display == 'block')
    {
        document.getElementById('now-works').style.display = 'none';
        document.getElementById('complete-works').style.display = 'none';
        document.getElementById('now-works-text').innerHTML = 'Показать таблицу текущих заказов';
    }
    if (document.getElementById('now-orders-text').innerHTML == 'Скрыть таблицу выполненных заказов')
        {
            document.getElementById('complete-orders').style.display = 'none';
            document.getElementById('now-orders-text').innerHTML = 'Показать таблицу текущих заказов';
        }
    else
        {
            if(document.getElementById('now-orders').style.display == 'none')
                {
                    document.getElementById('now-orders').style.display = 'block';
                    document.getElementById('now-orders-text').innerHTML = 'Скрыть таблицу текущих заказов';
                }
            else
                {
                    document.getElementById('now-orders').style.display = 'none';
                    document.getElementById('now-orders-text').innerHTML = 'Показать таблицу текущих заказов';
                }
        }
}

function showTableReadyOrders()
{
    if(document.getElementById('complete-orders').style.display == 'none')
    {
        document.getElementById('now-orders').style.display = 'none';
        document.getElementById('complete-orders').style.display = 'block';
        document.getElementById('now-orders-text').innerHTML = 'Скрыть таблицу выполненных заказов';
    }
    else
    {
        document.getElementById('now-orders').style.display = 'block';
        document.getElementById('complete-orders').style.display = 'none';
        document.getElementById('now-orders-text').innerHTML = 'Скрыть таблицу текущих заказов';
    }
}


function showTableNowWorks()
{
    if (document.getElementById('now-orders').style.display == 'block' || document.getElementById('complete-orders').style.display == 'block')
    {
        document.getElementById('now-orders').style.display = 'none';
        document.getElementById('complete-orders').style.display = 'none';
        document.getElementById('now-orders-text').innerHTML = 'Показать таблицу текущих заказов';
    }
    if (document.getElementById('now-works-text').innerHTML == 'Скрыть таблицу выполненных работ')
        {
            document.getElementById('complete-works').style.display = 'none';
            document.getElementById('now-works-text').innerHTML = 'Показать таблицу текущих работ';
        }
    else
        {
            if(document.getElementById('now-works').style.display == 'none')
                {
                    document.getElementById('now-works').style.display = 'block';
                    document.getElementById('now-works-text').innerHTML = 'Скрыть таблицу текущих работ';
                }
            else
                {
                    document.getElementById('now-works').style.display = 'none';
                    document.getElementById('now-works-text').innerHTML = 'Показать таблицу текущих работ';
                }
        }
}


function showTableReadyWorks()
{
    if(document.getElementById('complete-works').style.display == 'none')
    {
        document.getElementById('now-works').style.display = 'none';
        document.getElementById('complete-works').style.display = 'block';
        document.getElementById('now-works-text').innerHTML = 'Скрыть таблицу выполненных работ';
    }
    else
    {
        document.getElementById('now-works').style.display = 'block';
        document.getElementById('complete-works').style.display = 'none';
        document.getElementById('now-works-text').innerHTML = 'Скрыть таблицу текущих работ';
    }
}