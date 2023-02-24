let add = (event) => {
    event.preventDefault();
    let doctors = JSON.parse(localStorage.getItem("doctors")) || [];

  //   document.querySelector("#image").addEventListener("change", function () {
  //   const reader = new FileReader();
  //   reader.addEventListener("load", function () {
  //     localStorage.setItem("docimage", reader.result);
  //   });
  //   reader.readAsDataURL(this.file[0]);
  // });


    let doctor = {
      docname: document.getElementById("name").value,
      docspecific: document.getElementById("specific").value,
      docaddress: document.getElementById("address").value,
      docphone: document.getElementById("phone").value,
      docprice: document.getElementById("price").value,
    };
    doctors.push(doctor);
    document.querySelector("form").reset();

    localStorage.setItem("doctors", JSON.stringify(doctors));
  };
  document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("save").addEventListener("click", add);
  });

let card=document.getElementById("doctorCard");
// let carddoctor=document.getElementById("doctorCards");

let DocInfo=JSON.parse(localStorage.getItem("doctors"));

DocInfo.forEach(el => {
    addNewCard=`
    <div class="card">
        <h2>Dr/ ${el.docname}</h2>
        <small>Newly Joined</small>
        
        <p class="specific">${el.docspecific}</p>
        
        <p>info: ${el.docaddress}</p>
        
        <p>T: ${el.docphone}</p>
        
        <p>$ ${el.docprice} EGP</p>
        
        <div>
        
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
          Booking Now
        </button>
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Booking A Doctor</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                <input type="datetime-local" class="booktime" placeholder="Book">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
                  <button type="button" class="btn btn-primary">Save Booking</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        `
    card.innerHTML +=addNewCard;
    // carddoctor.innerHTML +=addNewCard;
});
