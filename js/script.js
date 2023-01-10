 // Initialize and add the Google Map

  function initMap() {

    // Map Options

    var options = {

      zoom: 8,
      center: {
        lat: 49.152055,
        lng: -121.966228
      }
    }

    //New Map

    var map = new google.maps.Map(document.getElementById("map"), options);

    // Ad Marker

    var marker = new google.maps.Marker({
      position: {
        lat: 49.1458303,
        lng: -121.9439387
      },
      map: map
    });
  }

  window.initMap = initMap;

  function showBathroom() {
    document.getElementById("collapseContent").innerHTML = " <div class='card text-center'> <div class = 'card-body'> <h5 class = 'card-title'> Bathroom Cleaning </h5> <p class = 'card-text'> With supporting text below as a natural lead - in to additional content. </p> <a href = '#' class = 'btn btn-primary' > Go somewhere </a> </div> </div>";
  }

  function showBoat() {
    document.getElementById("collapseContent").innerHTML = " <div class='card text-center'><div class = 'card-body'> <h5 class = 'card-title'> Boat Cleaning </h5> <p class = 'card-text'> With supporting text below as a natural lead - in to additional content. </p> <a href = '#' class = 'btn btn-primary' > Go somewhere </a> </div> </div>";
  }
  
  // Data Tables

  $(document).ready(function () {
  $(".data-table").each(function (_, table) {
    $(table).DataTable();
  });
});

  function toggleService() {
    
    var myServices = document.getElementById('myServices');
    var mySchedules = document.getElementById('mySchedules');
    var myEmergency = document.getElementById('myEmergency'); 
    var myEvents = document.getElementById('myEvents'); 
    var myProfile = document.getElementById('profile');

    var displayService = myServices.style.display;
    var displaySschedule = mySchedules.style.display;

    if (displayService == 'none') {      
      myServices.style.display = 'block';
      mySchedules.style.display = 'none';
      myEmergency.style.display = 'none';
      myEvents.style.display = 'none';
      
    }
    else {     
      myServices.style.display = 'none';
    };
  }

    function toggleSchedule() {
    
    var myServices = document.getElementById('myServices');
    var mySchedules = document.getElementById('mySchedules');
    var myEmergency = document.getElementById('myEmergency'); 
    var myEvents = document.getElementById('myEvents'); 
    var myProfile = document.getElementById('profile');

    var displaySchedule = mySchedules.style.display;

    if (displaySchedule == 'none') {      
            
      myServices.style.display = 'none';
      mySchedules.style.display = 'block';
      myEmergency.style.display = 'none';
      myEvents.style.display = 'none';
      
    }
    else {     
      mySchedules.style.display = 'none';
    };
  }

function toggleEmergency() {
    
    var myServices = document.getElementById('myServices');
    var mySchedules = document.getElementById('mySchedules');
    var myEmergency = document.getElementById('myEmergency'); 
    var myEvents = document.getElementById('myEvents'); 
    var myProfile = document.getElementById('profile');

    var displayEmergency = myEmergency.style.display;

    if (displayEmergency == 'none') {      
      
      mySchedules.style.display = 'none';
      myServices.style.display = 'none';
      myEmergency.style.display = 'block';
      myEvents.style.display = 'none';
      
    }
    else {     
      myEmergency.style.display = 'none';
    };
  }

  function toggleEvent() {
    
    var myServices = document.getElementById('myServices');
    var mySchedules = document.getElementById('mySchedules');
    var myEmergency = document.getElementById('myEmergency'); 
    var myEvents = document.getElementById('myEvents'); 
    var myProfile = document.getElementById('profile');

    var displayEvents= myEvents.style.display;

    if (displayEvents == 'none') {      
      
      mySchedules.style.display = 'none';
      myServices.style.display = 'none';
      myEmergency.style.display = 'none';
      myEvents.style.display = 'block';
      
    }
    else {     
      myEvents.style.display = 'none';
    };
  }

    function toggleCustomer() {
    
    var customer = document.getElementById('customer');
    var agent = document.getElementById('agent');
    var admin = document.getElementById('admin'); 

    var displayCustomer= customer.style.display;

    if (displayCustomer == 'none') {      
      
      customer.style.display = 'block';
      agent.style.display = 'none';
      admin.style.display = 'none';
      
    }
    else {     
      customer.style.display = 'none';
    };
  }

      function toggleAgent() {
    
    var customer = document.getElementById('customer');
    var agent = document.getElementById('agent');
    var admin = document.getElementById('admin'); 

    var displayAgent= agent.style.display;

    if (displayAgent == 'none') {      
      
      customer.style.display = 'none';
      agent.style.display = 'block';
      admin.style.display = 'none';
      
    }
    else {     
      agent.style.display = 'none';
    };
  }

      function toggleAdmin() {
    
    var customer = document.getElementById('customer');
    var agent = document.getElementById('agent');
    var admin = document.getElementById('admin'); 

    var displayAdmin= admin.style.display;

    if (displayAdmin == 'none') {      
      
      customer.style.display = 'none';
      agent.style.display = 'none';
      admin.style.display = 'block';
      
    }
    else {     
      admin.style.display = 'none';
    };
  }
  
        function toggleCustSchedule() {
    
    var schedule = document.getElementById('custSchedule');

    var displaySchedule= schedule.style.display;

    if (displaySchedule == 'none') {      
      
      schedule.style.display = 'block';
      
    }
    else {     
      schedule.style.display = 'none';
    };
  }
  

  