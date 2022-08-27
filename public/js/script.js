var lowerSlider = document.querySelector("#lower"),
    outputLower = document.querySelector("#num"),
    outputUpper = document.querySelector("#nummax"),
    upperSlider = document.querySelector("#upper"),
    lowerVal = parseInt(lowerSlider.value);
upperVal = parseInt(upperSlider.value);

upperSlider.oninput = function () {
    lowerVal = parseInt(lowerSlider.value);
    outputLower.value = lowerVal;
    upperVal = parseInt(upperSlider.value);
    outputUpper.value = upperVal;
    if (upperVal < lowerVal + 4) {
        lowerSlider.value = upperVal - 4;

        if (lowerVal == lowerSlider.min) {
            upperSlider.value = 4;
        }
    }
};

lowerSlider.oninput = function () {
    lowerVal = parseInt(lowerSlider.value);
    outputLower.value = lowerVal;
    upperVal = parseInt(upperSlider.value);
    outputUpper.value = upperVal;

    if (lowerVal > upperVal - 4) {
        upperSlider.value = lowerVal + 4;

        if (upperVal == upperSlider.max) {
            lowerSlider.value = parseInt(upperSlider.max) - 4;
        }
    }
};

var lowerSliderMoney = document.querySelector("#lowerMoney"),
    upperSliderMoney = document.querySelector("#upperMoney"),
    lowerMoneyLabel = document.querySelector("#mNumMin"),
    upperMoneyLabel = document.querySelector("#mNumMax"),
    lowerValMoney = parseInt(lowerSliderMoney.value);
upperValMoney = parseInt(upperSliderMoney.value);

upperSliderMoney.oninput = function () {
    lowerValMoney = parseInt(lowerSliderMoney.value);
    upperValMoney = parseInt(upperSliderMoney.value);
    upperMoneyLabel.value = upperValMoney;
    lowerMoneyLabel.value = lowerValMoney;
    if (upperValMoney < lowerValMoney + 4) {
        lowerSliderMoney.value = upperValMoney - 4;

        if (lowerValMoney == lowerSliderMoney.min) {
            upperSliderMoney.value = 4;
        }
    }
};

lowerSliderMoney.oninput = function () {
    lowerValMoney = parseInt(lowerSliderMoney.value);
    upperValMoney = parseInt(upperSliderMoney.value);
    upperMoneyLabel.value = upperValMoney;
    lowerMoneyLabel.value = lowerValMoney;
    if (lowerValMoney > upperValMoney - 4) {
        upperSliderMoney.value = lowerValMoney + 4;

        if (upperValMoney == upperSliderMoney.max) {
            lowerSliderMoney.value = parseInt(upperSliderMoney.max) - 4;
        }
    }
};
