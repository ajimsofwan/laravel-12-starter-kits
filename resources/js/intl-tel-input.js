import intlTelInput from "intl-tel-input";

const input = document.querySelector("#intl-tel-input");
if (input) {
    const iti = intlTelInput(input, {
        initialCountry: "auto",
        geoIpLookup: (callback) => {
            fetch("https://ipapi.co/json")
                .then((res) => res.json())
                .then((data) => callback(data.country_code))
                .catch(() => callback("us"));
        },
        separateDialCode: true,
        loadUtilsOnInit: () => import("intl-tel-input/utils"),
        // loadUtils: () => import("intl-tel-input/utils"),
    });

    input.addEventListener("countrychange", function () {
        const phoneNumber = iti.getNumber();
        const hiddenPhoneField = document.querySelector('input[name="phone"]');
        if (hiddenPhoneField) {
            hiddenPhoneField.value = phoneNumber;
            hiddenPhoneField.dispatchEvent(new Event("input"));
        }
    });

    input.addEventListener("input", function () {
        const phoneNumber = iti.getNumber();
        const hiddenPhoneField = document.querySelector('input[name="phone"]');
        if (hiddenPhoneField) {
            hiddenPhoneField.value = phoneNumber;
            hiddenPhoneField.dispatchEvent(new Event("input"));
        }
    });
}
