let openTables = document.querySelectorAll('.buttonPluse')

  for(buttonPluse of openTables){
    buttonPluse.addEventListener('click', function() {
      let windowMain = this.closest('.windowMain')
      let buttonPluse = windowMain.querySelector('.buttonPluse')
      let windowFront = windowMain.querySelector('.windowFront')
      // console.log(windowFront);

      if(windowFront.style.display === 'block'){
        windowFront.style.display = 'none'
        buttonPluse.textContent="+"
      } else{
        windowFront.style.display = 'block'
        buttonPluse.textContent="×"
      }
    })
  }