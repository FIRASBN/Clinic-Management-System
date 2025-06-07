const addconsultationGroup = document.querySelector(
    ".consultation > .addconsultation"
  );
  
  const addconsultationBtn = document.getElementById("addconsultation");
  const enregisterconsultationBtn = document.querySelector(
    ".addconsultation > form > button[type=submit]"
  );
  addconsultationBtn.addEventListener("click", (e) => {
    addconsultationGroup.style.display = "block";
  });
  
  enregisterconsultationBtn.addEventListener("click", (e) => {
    addconsultationGroup.style.display = "none";
  });
  



  const seeconsultationBtn = document.getElementById("seeconsultation");

  seeconsultationBtn.addEventListener("click", (e) => {
      addconsultationGroup.style.display = "none";
  });






  
