function sendMail(){
    var params = {
        Name: document.getElementById("Name").value ,
        Email: document.getElementById("Email").value ,
        Message: document.getElementById("Message").value ,
    };


const serviceId = "service_csjzu1p" ;
const templateId = "template_qxd8zvq";

emailjs.send(serviceId,templateId,params)
.then(
    res =>{
        document.getElementById("Name").value = "";
        document.getElementById("Email").value = "";
        document.getElementById("Message").value = "";
        console.log(res);
        alert("Message sent successfully");

    }
)
.catch((err) => console.log(err));
}