const btnNext = document.querySelector('form .btn .next');
const btnPrev = document.querySelector('form .btn .prev');
const indicator = document.querySelector('.indicator .line span');
const indicatorItems = document.querySelectorAll('.indicator p');
const form = document.querySelector('form');
const allTab = document.querySelectorAll('form .tab');
let i = 0;



allTab[i].classList.add('show');
indicator.style.width = `${i * 50}%`;
indicatorItems[i].classList.add('active');

if(i == 0)
{
  btnPrev.style.display = 'none';
}
else
{
  btnPrev.style.display = 'inline';
}

btnNext.addEventListener('click', function () {
  const allInputPerTab = allTab[i].querySelectorAll('input');
  for(let j = 0; j < allInputPerTab.length; j++)
  {
      allInputPerTab[j].addEventListener('input', function () {
      allInputPerTab[j].style.borderColor = '#ddd';
    });

    if(allInputPerTab[j].value === '' || !allInputPerTab[j].checkValidity())
    {
      allInputPerTab[j].style.borderColor = 'red';
      return false
    }
    else
    {
      allInputPerTab[j].style.borderColor = '#ddd';
    }
  }
  
  
  i += 1;

  if(i >= allTab.length)
  {
    form.submit();
    return false
  }
  else
  {
    for(let j = 0; j < allTab.length; j++)
    {
      allTab[j].classList.remove('show');
      indicatorItems[j].classList.remove('active');
    }
    
    for(let j = 0; j < i; j++)
    {
      indicatorItems[j].classList.add('active');
    }

    allTab[i].classList.add('show');
    indicator.style.width = `${i * 50}%`;
    indicatorItems[i].classList.add('active');
  }

  if(i == 0)
  {
    btnPrev.style.display = 'none';
  }
  else
  {
    btnPrev.style.display = 'inline';
  }

  if(i == allTab.length - 1)
  {
    btnNext.innerHTML = 'Submit';
  }
  else
  {
    btnNext.innerHTML = 'Next';
  }
  
})

btnPrev.addEventListener('click', function () {
  i -= 1;

  for(let j = 0; j < allTab.length; j++)
    {
      allTab[j].classList.remove('show');
      indicatorItems[j].classList.remove('active');
    }
    
    for(let j = 0; j < i; j++)
    {
      indicatorItems[j].classList.add('active');
    }

    allTab[i].classList.add('show');
    indicator.style.width = `${i * 50}%`;
    indicatorItems[i].classList.add('active');

    if(i == 0)
    {
      btnPrev.style.display = 'none';
    }
    else
    {
      btnPrev.style.display = 'inline';
    }

    if(i == allTab.length - 1)
    {
      btnNext.innerHTML = 'Submit';
    }
    else
    {
      btnNext.innerHTML = 'Next';
    }
})



/* FOR DATE PICKER */


let startDate = document.getElementById('startDate')
let endDate = document.getElementById('endDate')

startDate.addEventListener('change',(e)=>{
  let startDateVal = e.target.value
  document.getElementById('startDateSelected').innerText = startDateVal
})

endDate.addEventListener('change',(e)=>{
  let endDateVal = e.target.value
  document.getElementById('endDateSelected').innerText = endDateVal
})  



/*const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      console.log(entry)
      if(entry.isIntersecting)
      {
        entry.target.classList.add('show');
      }
      else
      {
        entry.target.classList.remove('show');
      }
    });
  });

  const hiddenElements = document.querySelectorAll('.welcome-div');
  const hiddenElemental = document.querySelectorAll('.cards');
  
  hiddenElements.forEach((el) => observer.observe(el));
  hiddenElemental.forEach((el) => observer.observe(el));
*/




