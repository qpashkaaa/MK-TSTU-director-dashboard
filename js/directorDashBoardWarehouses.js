window.onload = function() 
{

let total_count = document.getElementById('total-count').innerHTML;

for(let i = 0; i<= total_count-1;i++)
{
    let workload = document.getElementById('workload-text-' + i).innerHTML;
    workload = (280 - (workload * 2.8));
    if(workload > 274.2)
    {
        document.getElementById('workload-' + i).style.borderBottomLeftRadius = '9px';
        document.getElementById('workload-' + i).style.borderBottomRightRadius = '9px';
    }
    document.getElementById('workload-' + i).style.height = workload + 'px';
}
}
