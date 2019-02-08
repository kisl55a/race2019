function fatPercent ()
{
    w = Number(document.getElementById("weight").value);
    h = Number(document.getElementById("height").value);
    g = Number(document.getElementById("gender").value);
    console.log(w,h,g);
    var fut;
    if (g)
    {
        fut=(w+h)/(g-10)
    }
    {
        fut=(w+h)/(g+10)  
    }
    fut=fut.toFixed(2)
    document.getElementById('result').innerHTML = fut,"%";


}