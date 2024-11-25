document.addEventListener('DOMContentLoaded', () => {
    //Main variables to control the closing and opening of the pop up
    const main_popup = document.getElementById('main-popup');
    const open_btn = document.getElementById('open-popup');
    const close_btn = document.querySelectorAll('#close-btn, #main-popup');
    
    //Showing popup
    function show_popup(){
        main_popup.classList.remove('hidden');
        main_popup.classList.add('visible');
    }

    // closing popup
    function close_popup(){
        main_popup.classList.remove('visible');
        main_popup.classList.add('hidden');

    }
    
    // Event listener to trigger the opening and closing.
    close_btn.forEach((btn) => {
    btn.addEventListener('click', (event) => { 
        event.preventDefault();
        close_popup();
    });
});

        open_btn.addEventListener('click', show_popup);



    // Closing the document-fully loaded
  });