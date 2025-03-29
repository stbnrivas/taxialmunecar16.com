
function setBookingForm(bookingType){
    const airportSelect = document.getElementById("airport-select")
    const portSelect = document.getElementById("port-select")
    const datetimeSelectMsg = document.getElementById("data-time-select-msg")
    const dateSelect = document.getElementById("date-select")
    const timeSelect = document.getElementById("time-select")
    const destinationsSelectMsg = document.getElementById("destinations-select-msg")
    const journeyStartSelect = document.getElementById("journey-start-select")
    const journeyEndsSelect = document.getElementById("journey-ends-select")
    const airportMsgSelect = document.getElementById("airport-select-msg")
    const portMsgSelect = document.getElementById("port-select-msg")

    // document.getElementById("edName").required = true

    if ( bookingType === 'instant'){
        airportSelect.classList.add('hidden')
        portSelect.classList.add('hidden')
        airportMsgSelect.classList.add('hidden')
        portMsgSelect.classList.add('hidden')
        datetimeSelectMsg.classList.add('hidden')
        dateSelect.classList.add('hidden')
        timeSelect.classList.add('hidden')
        destinationsSelectMsg.classList.remove('hidden')
        journeyStartSelect.classList.remove('hidden')
        journeyEndsSelect.classList.remove('hidden')
    } else if ( bookingType === 'reservation'){
        airportSelect.classList.add('hidden')
        airportMsgSelect.classList.add('hidden')
        portSelect.classList.add('hidden')
        portMsgSelect.classList.add('hidden')
        datetimeSelectMsg.classList.remove('hidden')
        dateSelect.classList.remove('hidden')
        timeSelect.classList.remove('hidden')
        destinationsSelectMsg.classList.remove('hidden')
        journeyStartSelect.classList.remove('hidden')
        journeyEndsSelect.classList.remove('hidden')
    } else if ( bookingType === 'airport'){
        airportSelect.classList.remove('hidden')
        airportMsgSelect.classList.remove('hidden')
        portSelect.classList.add('hidden')
        portMsgSelect.classList.add('hidden')
        datetimeSelectMsg.classList.remove('hidden')
        dateSelect.classList.remove('hidden')
        timeSelect.classList.remove('hidden')
        destinationsSelectMsg.classList.add('hidden')
        journeyStartSelect.classList.add('hidden')
        journeyEndsSelect.classList.add('hidden')
    } else if ( bookingType === 'cruise'){
        airportSelect.classList.add('hidden')
        airportMsgSelect.classList.add('hidden')
        portSelect.classList.remove('hidden')
        portMsgSelect.classList.remove('hidden')
        datetimeSelectMsg.classList.remove('hidden')
        dateSelect.classList.remove('hidden')
        timeSelect.classList.remove('hidden')
        destinationsSelectMsg.classList.add('hidden')
        journeyStartSelect.classList.add('hidden')
        journeyEndsSelect.classList.add('hidden')
    } else if ( bookingType === 'routes'){
        airportSelect.classList.add('hidden')
        airportMsgSelect.classList.add('hidden')
        portSelect.classList.add('hidden')
        portMsgSelect.classList.add('hidden')
        datetimeSelectMsg.classList.remove('hidden')
        dateSelect.classList.remove('hidden')
        timeSelect.classList.remove('hidden')
        destinationsSelectMsg.classList.add('hidden')
        journeyStartSelect.classList.add('hidden')
        journeyEndsSelect.classList.add('hidden')
    } else {
        // unknown
        airportSelect.classList.add('hidden')
        airportMsgSelect.classList.add('hidden')
        portSelect.classList.add('hidden')
        portMsgSelect.classList.add('hidden')
        datetimeSelectMsg.classList.add('hidden')
        dateSelect.classList.add('hidden')
        timeSelect.classList.add('hidden')
        destinationsSelectMsg.classList.add('hidden')
        journeyStartSelect.classList.add('hidden')
        journeyEndsSelect.classList.add('hidden')
    }
}

function onBookingTypeChange(event){
    const bookingType = event.target.value
    setBookingForm(event.target.value)


    // remove all red borders
    document.getElementById("booking-type").classList.remove('border-red-500')
    document.getElementById("airport-select").classList.remove('border-red-500')
    document.getElementById("port-select").classList.remove('border-red-500')

    document.getElementById("date-select").classList.remove('border-red-500')
    document.getElementById("time-select").classList.remove('border-red-500')

    document.getElementById("journey-start-select").classList.remove('border-red-500')
    document.getElementById("journey-ends-select").classList.remove('border-red-500')

    document.getElementById("name-select").classList.remove('border-red-500')
    document.getElementById("phone-select").classList.remove('border-red-500')
    document.getElementById("email-select").classList.remove('border-red-500')
}

function validateName(){
    const name = document.getElementById("name-select")
    let error = 0
    if (name.value){
        name.classList.remove('border-red-500')
        name.classList.remove('border-2')
    } else {
        name.classList.add('border-red-500')
        name.classList.add('border-2')
        error++
        console.log("name not valid") // TODO: delete
    }
    return error
}

function validatePhone(){
    const phone = document.getElementById("phone-select")
    let error = 0
    if (phone.value){
        phone.classList.remove('border-red-500')
        phone.classList.remove('border-2')
    } else {
        phone.classList.add('border-red-500')
        phone.classList.add('border-2')
        error++
        console.log("phone not valid") // TODO: delete
    }
    return error
}

function validateEmail(){
    const email = document.getElementById("email-select")
    let error = 0

    if (email.value){
        email.classList.remove('border-red-500')
        email.classList.remove('border-2')
    } else {
        email.classList.add('border-red-500')
        email.classList.add('border-2')
        error++
        console.log("email not valid") // TODO: delete
    }
    return error
}

function validateBookingType(){
    const booking_type = document.getElementById("booking-type")
    let error = 0
    if (['instant', 'reservation', 'cruise', 'airport', 'route'].indexOf(booking_type.value) > -1) {
        booking_type.classList.remove('border-red-500')
        booking_type.classList.remove('border-2')
    } else {
        booking_type.classList.add('border-red-500')
        booking_type.classList.add('border-2')
        error++
        console.log("booking type not valid") // TODO: delete
    }
    return error
}

function validateTaxiOrigin(){
    const ori = document.getElementById("journey-start-select")
    let error = 0
    if (ori.value){
        ori.classList.remove('border-red-500')
        ori.classList.remove('border-2')
    } else {
        ori.classList.add('border-red-500')
        ori.classList.add('border-2')
        error++
        console.log("origin not valid") // TODO: delete
    }
    return error
}

function validateTaxiDestination(){
    const dst = document.getElementById("journey-ends-select")
    let error = 0

    if (dst.value){
        dst.classList.remove('border-red-500')
        dst.classList.remove('border-2')
    } else {
        dst.classList.add('border-red-500')
        dst.classList.add('border-2')
        error++
        console.log("destination not valid") // TODO: delete
    }
}

function validateDate(){
    let error = 0
    const date = document.getElementById("date-select")
    if (isNaN(Date.parse(date.value))){
        date.classList.add('border-red-500')
        date.classList.add('border-2')
        error++
        console.log("date not valid") // TODO: delete
    } else {
        date.classList.remove('border-red-500')
        date.classList.remove('border-2')
        error++
    }
    return error
}

function validateTime(){
    let error = 0
    const time = document.getElementById("time-select")

    if (time.value){
        time.classList.remove('border-red-500')
        time.classList.remove('border-2')
        error++
        console.log("time not valid") // TODO: delete
    } else {
        time.classList.add('border-red-500')
        time.classList.add('border-2')
        error++
    }
    return validateTime
}

function validateAirport(){
    let error = 0
    const airport = document.getElementById("airport-select")
    if (airport.value){
        airport.classList.remove('border-red-500')
        airport.classList.remove('border-2')
        error++
    } else {
        airport.classList.add('border-red-500')
        airport.classList.add('border-2')
        error++
        console.log("airport not valid") // TODO: delete
    }
    return error
}

function validatePort(){
    let error = 0
    const port = document.getElementById("port-select")
    if (port.value){
        port.classList.remove('border-red-500')
        port.classList.remove('border-2')
        error++
    } else {
        port.classList.add('border-red-500')
        port.classList.add('border-2')
        error++
        console.log("port not valid") // TODO: delete
    }
    return error
}


function onBookingFormSubmit(event) {
    event.preventDefault()
    let errors = 0

    const booking_type = document.getElementById("booking-type")
    errors = validateName() + validatePhone() + validateEmail() + validateBookingType()

    if (booking_type.value == 'instant'){
        errors = validateTaxiOrigin() && validateTaxiDestination()
    }

    if (booking_type.value == 'reservation'){
        errors = validateDate() && validateTime() && validateTaxiOrigin() && validateTaxiDestination()
    }

    if (booking_type.value == 'airport'){
        errors = validateAirport() && validateDate() && validateTime()
    }

    if (booking_type.value == 'cruise'){
        errors = validatePort() && validateDate() && validateTime()
    }

    if (booking_type.value == 'routes'){
        errors = validateDate() && validateTime()
    }

    if(errors == 0){
        document.getElementById("booking-form").submit()
    }
}


window.addEventListener('load', function () {
    const formSelect = document.getElementById("booking-type")
    formSelect.addEventListener("change", onBookingTypeChange)

    const form = document.getElementById("booking-form")
    form.addEventListener("submit", onBookingFormSubmit)

    setBookingForm(formSelect.value)
})


