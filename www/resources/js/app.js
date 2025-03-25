// import './bootstrap';

function setBookingForm(bookingType){
    const airportSelect = document.getElementById("airport-select");
    const portSelect = document.getElementById("port-select");
    const datetimeSelectMsg = document.getElementById("data-time-select-msg");
    const dateSelect = document.getElementById("date-select");
    const timeSelect = document.getElementById("time-select");
    const destinationsSelectMsg = document.getElementById("destinations-select-msg");
    const journeyStartSelect = document.getElementById("journey-start-select");
    const journeyEndsSelect = document.getElementById("journey-ends-select");
    const airportMsgSelect = document.getElementById("airport-select-msg");
    const portMsgSelect = document.getElementById("port-select-msg");

    // document.getElementById("edName").required = true;

    if ( bookingType === 'instant'){
        airportSelect.classList.add('hidden');
        portSelect.classList.add('hidden');
        airportMsgSelect.classList.add('hidden');
        portMsgSelect.classList.add('hidden');
        datetimeSelectMsg.classList.add('hidden');
        dateSelect.classList.add('hidden');
        timeSelect.classList.add('hidden');
        destinationsSelectMsg.classList.remove('hidden');
        journeyStartSelect.classList.remove('hidden');
        journeyEndsSelect.classList.remove('hidden');
        console.log("instant")
    } else if ( bookingType === 'reservation'){
        airportSelect.classList.add('hidden');
        airportMsgSelect.classList.add('hidden');
        portSelect.classList.add('hidden');
        portMsgSelect.classList.add('hidden');
        datetimeSelectMsg.classList.remove('hidden');
        dateSelect.classList.remove('hidden');
        timeSelect.classList.remove('hidden');
        destinationsSelectMsg.classList.remove('hidden');
        journeyStartSelect.classList.remove('hidden');
        journeyEndsSelect.classList.remove('hidden');
    } else if ( bookingType === 'airport'){
        airportSelect.classList.remove('hidden');
        airportMsgSelect.classList.remove('hidden');
        portSelect.classList.add('hidden');
        portMsgSelect.classList.add('hidden');
        datetimeSelectMsg.classList.remove('hidden');
        dateSelect.classList.remove('hidden');
        timeSelect.classList.remove('hidden');
        destinationsSelectMsg.classList.add('hidden');
        journeyStartSelect.classList.add('hidden');
        journeyEndsSelect.classList.add('hidden');
    } else if ( bookingType === 'cruise'){
        airportSelect.classList.add('hidden');
        airportMsgSelect.classList.add('hidden');
        portSelect.classList.remove('hidden');
        portMsgSelect.classList.remove('hidden');
        datetimeSelectMsg.classList.remove('hidden');
        dateSelect.classList.remove('hidden');
        timeSelect.classList.remove('hidden');
        destinationsSelectMsg.classList.add('hidden');
        journeyStartSelect.classList.add('hidden');
        journeyEndsSelect.classList.add('hidden');
    } else if ( bookingType === 'routes'){
        airportSelect.classList.add('hidden');
        airportMsgSelect.classList.add('hidden');
        portSelect.classList.add('hidden');
        portMsgSelect.classList.add('hidden');
        datetimeSelectMsg.classList.remove('hidden');
        dateSelect.classList.remove('hidden');
        timeSelect.classList.remove('hidden');
        destinationsSelectMsg.classList.add('hidden');
        journeyStartSelect.classList.add('hidden');
        journeyEndsSelect.classList.add('hidden');
    } else {
        // unknown
        // airportSelect.classList.add('hidden');
        // airportMsgSelect.classList.add('hidden');
        // portSelect.classList.add('hidden');
        // portMsgSelect.classList.add('hidden');
        // datetimeSelectMsg.classList.add('hidden');
        // dateSelect.classList.add('hidden');
        // timeSelect.classList.add('hidden');
        // destinationsSelectMsg.classList.add('hidden');
        // journeyStartSelect.classList.add('hidden');
        // journeyEndsSelect.classList.add('hidden');
    }
}

function onBookingTypeChange(event){
    const bookingType = event.target.value;
    setBookingForm(event.target.value);

    // remove all red borders
    document.getElementById("booking-type").classList.remove('border-red-500')
    document.getElementById("airport-select").classList.remove('border-red-500')
    document.getElementById("port-select").classList.remove('border-red-500')
    document.getElementById("data-time-select-msg").classList.remove('border-red-500')
    document.getElementById("date-select").classList.remove('border-red-500')
    document.getElementById("time-select").classList.remove('border-red-500')
    document.getElementById("destinations-select-msg").classList.remove('border-red-500')
    document.getElementById("journey-start-select").classList.remove('border-red-500')
    document.getElementById("journey-ends-select").classList.remove('border-red-500')
    document.getElementById("airport-select-msg").classList.remove('border-red-500')
    document.getElementById("port-select-msg").classList.remove('border-red-500')
}

function onBookingFormSubmit(event) {
    event.preventDefault();
    let isValid = false

    const booking_type = document.getElementById("booking-type")
    // const bookings_type = ['instant', 'reservation', 'cruise', 'airport', 'route']


    const name = document.getElementById("name-select")
    const phone = document.getElementById("phone-select")
    const email = document.getElementById("email-select")

    if (name.value){
        name.classList.remove('border-red-500')
        name.classList.remove('border-2')
        isValid = isValid && true
    } else {
        name.classList.add('border-red-500')
        name.classList.add('border-2')
        isValid = isValid && false
    }

    if (phone.value){
        phone.classList.remove('border-red-500')
        phone.classList.remove('border-2')
        isValid = isValid && true;
    } else {
        phone.classList.add('border-red-500')
        phone.classList.add('border-2')
        isValid = isValid && false
    }

    if (email.value){
        email.classList.remove('border-red-500')
        email.classList.remove('border-2')
        isValid = isValid && true;
    } else {
        email.classList.add('border-red-500')
        email.classList.add('border-2')
        isValid = isValid && false
    }

    const date = document.getElementById("date-select");
    const time = document.getElementById("time-select");

    const ori = document.getElementById("journey-start-select")
    const dst = document.getElementById("journey-ends-select")

    const port = document.getElementById("port-select")
    const airport = document.getElementById("airport-select")


    if (['instant', 'reservation', 'cruise', 'airport', 'route'].indexOf(booking_type.value) > -1) {
        booking_type.classList.remove('border-red-500')
        booking_type.classList.remove('border-2')
        isValid = isValid && true
    } else {
        booking_type.classList.add('border-red-500')
        booking_type.classList.add('border-2')
        isValid = isValid && false
    }


    if (booking_type.value == 'instant'){

        if (ori.value){
            ori.classList.remove('border-red-500')
            ori.classList.remove('border-2')
            isValid = isValid && true;
        } else {
            ori.classList.add('border-red-500')
            ori.classList.add('border-2')
            isValid = isValid && false
        }

        if (dst.value){
            dst.classList.remove('border-red-500')
            dst.classList.remove('border-2')
            isValid = isValid && true;
        } else {
            dst.classList.add('border-red-500')
            dst.classList.add('border-2')
            isValid = isValid && false
        }
    }


    if (booking_type.value == 'reservation'){

        if (isNaN(Date.parse(date.value))){
            date.classList.add('border-red-500')
            date.classList.add('border-2')
            isValid = isValid && false
        } else {
            date.classList.remove('border-red-500')
            date.classList.remove('border-2')
            isValid = isValid && true;
        }

        if (time.value){
            time.classList.remove('border-red-500')
            time.classList.remove('border-2')
            isValid = isValid && true;
        } else {
            time.classList.add('border-red-500')
            time.classList.add('border-2')
            isValid = isValid && false
        }

        if (ori.value){
            ori.classList.remove('border-red-500')
            ori.classList.remove('border-2')
            isValid = isValid && true;
        } else {
            ori.classList.add('border-red-500')
            ori.classList.add('border-2')
            isValid = isValid && false
        }

        if (dst.value){
            dst.classList.remove('border-red-500')
            dst.classList.remove('border-2')
            isValid = isValid && true;
        } else {
            dst.classList.add('border-red-500')
            dst.classList.add('border-2')
            isValid = isValid && false
        }
    }
    // form.submit();

    if (booking_type.value == 'cruise'){

    }

    if (booking_type.value == 'airport'){
    }

    if (booking_type.value == 'route'){

    }
}


window.addEventListener('load', function () {
    setBookingForm("")

    const formSelect = document.getElementById("booking-type")
    formSelect.addEventListener("change", onBookingTypeChange)

    formSelect.value = ''

    const form = document.getElementById("booking-form")
    form.addEventListener("submit", onBookingFormSubmit)

})


