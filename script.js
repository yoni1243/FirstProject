{
    
    let SubmitButton=document.querySelector('#submit-button');
    function clicklistner(event){
        event.preventDefault();
        let nameInput=document.querySelector('#name');
        let emailInput=document.querySelector('#email');
        let messageInput=document.querySelector('#message');

        let nameText= nameInput.value;
        let emailText= emailInput.value;
        let messageText= messageInput.value;

        console.log('name:', nameText, 'email:', emailText, 'message:',messageText);

        if(emailValidate(emailText) !==true){
            console.log('The email must contain @');
            return false;
        }
        console.log('Thanks for ur message');
        
        
     }

     function emailValidate(email){
        if(email.includes('@')){
            return true;
        }else{
            return false;
        }
    }
    
    SubmitButton.addEventListener('click', clicklistner);

}