// import './bootstrap';


function onBookingTypeChange(event){
    const bookingType = event.target.value;
    const airportSelect = document.getElementById("airport-select");
    const portSelect = document.getElementById("port-select");
    const dateSelect = document.getElementById("date-select");
    const timeSelect = document.getElementById("time-select");
    const destinationSelect = document.getElementById("destination-select");

    if ( bookingType === 'instant'){
        airportSelect.classList.add('hidden');
        portSelect.classList.add('hidden');
        dateSelect.classList.add('hidden');
        timeSelect.classList.add('hidden');
        destinationSelect.classList.remove('hidden');
    } else if ( bookingType === 'reservation'){
        airportSelect.classList.add('hidden');
        portSelect.classList.add('hidden');
        dateSelect.classList.remove('hidden');
        timeSelect.classList.remove('hidden');
        destinationSelect.classList.remove('hidden');
    } else if ( bookingType === 'airport'){
        airportSelect.classList.remove('hidden');
        portSelect.classList.add('hidden');
        dateSelect.classList.remove('hidden');
        timeSelect.classList.remove('hidden');
        destinationSelect.classList.remove('hidden');
    } else if ( bookingType === 'cruise'){
        airportSelect.classList.add('hidden');
        portSelect.classList.remove('hidden');
        dateSelect.classList.remove('hidden');
        timeSelect.classList.remove('hidden');
        destinationSelect.classList.remove('hidden');
    } else if ( bookingType === 'routes'){
        airportSelect.classList.add('hidden');
        portSelect.classList.add('hidden');
        dateSelect.classList.remove('hidden');
        timeSelect.classList.remove('hidden');
        destinationSelect.classList.add('hidden');
    } else {
        // unknown
        airportSelect.classList.add('hidden');
        portSelect.classList.add('hidden');
        dateSelect.classList.remove('hidden');
        timeSelect.classList.remove('hidden');
        destinationSelect.classList.remove('hidden');
    }
}

function onBookingFormSubmit(event) {
    event.preventDefault();
    console.log("submit")
    
    const form = document.getElementById("booking-form");
    // form.submit();
}


window.addEventListener('load', function () {
    const form = document.getElementById("booking-form");
    form.addEventListener("submit", onBookingFormSubmit);





    const formSelect = document.getElementById("booking-type");
    formSelect.addEventListener("change", onBookingTypeChange);

})


