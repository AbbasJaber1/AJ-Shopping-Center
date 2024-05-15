
function generateReceipt() {
    var fullName = document.getElementById('p1').value;
    var address = document.getElementById('p3').value;
    var phoneNumber = document.getElementById('p2').value;
    var orderType = document.getElementById('orderType').value;
    
    var receiptText = "Your Receipt:\n";
    receiptText += "Full Name: " + fullName + "\n";
    receiptText += "Address: " + address + "\n";
    receiptText += "Phone Number: " + phoneNumber + "\n";
    receiptText += "Type of Order: " + orderType + "\n";
    
    if( orderType == 'PowerBanks'){
        var powerBanks = document.getElementById('powerBanksSelect').value;
        receiptText+= "Item: " + powerBanks + "\n";
        price = getprice(powerBanks);
        receiptText+= "Price: " + price + "$\n";
    }
    else if(orderType == 'Smartwatches'){
        var SmartWatches = document.getElementById('SmartWatchesSelect').value;
        receiptText+= "Item: " + SmartWatches + "\n";
        price = getprice(SmartWatches);
        receiptText+= "Price: " + price + "$\n";
    }
    else if(orderType == 'Earbuds'){
        var Earbuds = document.getElementById('EarbudsSelect').value;
        receiptText+= "Item: " + Earbuds + "\n";
        price = getprice(Earbuds);
        receiptText+= "Price: " + price + "$\n";
    }
    else if(orderType == 'HeadSets'){
        var HeadSets = document.getElementById('HeadSetsSelect').value;
        receiptText+= "Item: " + HeadSets + "\n";
        price = getprice(HeadSets);
        receiptText+= "Price: " + price + "$\n";
    }
    else if(orderType == 'Mouses'){
        var Mouses = document.getElementById('MousesSelect').value;
        receiptText+= "Item: " + Mouses + "\n";
        price = getprice(Mouses);
        receiptText+= "Price: " + price + "$\n";
    }
    else if(orderType == 'DistinctItems'){
        var DistinctItems = document.getElementById('DistinctItemsSelect').value;
        receiptText+= "Item: " + DistinctItems + "\n";
        price = getprice(DistinctItems);
        receiptText+= "Price: " + price + "$\n";
    }
    var blob = new Blob([receiptText], { type: "text/plain;charset=utf-8" });
    var link = document.createElement("a");
    link.download = "receipt.txt";
    link.href = window.URL.createObjectURL(blob);
    link.click();
}

function appear(){
        var orderTypeSelect = document.getElementById('orderType');
        var powerBanksSelect = document.getElementById('powerBanksSelect');
        var SmartWatchesSelect = document.getElementById('SmartWatchesSelect');
        var EarbudsSelect = document.getElementById('EarbudsSelect');
        var HeadSetsSelect = document.getElementById('HeadSetsSelect');
        var MousesSelect = document.getElementById('MousesSelect');
        var DistinctItemsSelect = document.getElementById('DistinctItemsSelect');

        if (orderTypeSelect.value === 'PowerBanks') {
            powerBanksSelect.style.display = 'block';
        } else {
            powerBanksSelect.style.display = 'none';
        }
        if (orderTypeSelect.value === 'Smartwatches') {
            SmartWatchesSelect.style.display = 'block';
        } else {
            SmartWatchesSelect.style.display = 'none';
        }
        if (orderTypeSelect.value === 'Earbuds') {
            EarbudsSelect.style.display = 'block';
        } else {
            EarbudsSelect.style.display = 'none';
        }
        if (orderTypeSelect.value === 'HeadSets') {
            HeadSetsSelect.style.display = 'block';
        } else {
            HeadSetsSelect.style.display = 'none';
        }
        if (orderTypeSelect.value === 'Mouses') {
            MousesSelect.style.display = 'block';
        } else {
            MousesSelect.style.display = 'none';
        }
        if (orderTypeSelect.value === 'DistinctItems') {
            DistinctItemsSelect.style.display = 'block';
        } else {
            DistinctItemsSelect.style.display = 'none';
        }
        
    }

function getprice(p){
    //PowerBanks Prices
    if(p == 'XO Wireless battery pack'){price = 25;return price;}
    if(p == 'Bavin 20,000'){price = 23 ;return price;}
    if(p == 'Sunpin 20,000'){price = 18;return price;}
    if(p == 'Sunpin 10,000'){price = 11;return price;}
    if(p == 'KinVale 20,000'){price = 23;return price;}
    if(p == 'XO 10,000'){price = 13;return price;}
    if(p == 'Moxom 20,000 PD'){price = 26;return price;}
    if(p == 'Polymer 20,000'){price = 22;return price;}
    if(p == 'Bavin 30,000'){price = 36;return price;}
    //SmartWatches Prices
    if(p == 'Modio MC92 ULTRA 2'){price = 15;return price;}
    if(p == 'S9 PRO Smart Watch'){price = 13 ;return price;}
    if(p == 'T900 Ultra 2'){price = 15;return price;}
    if(p == 'Modio MC95 Ultra 2'){price = 20;return price;}
    if(p == 'GT5 SMART WATCH'){price = 23;return price;}
    if(p == 'Z80 8 bands SmartWatch'){price = 25;return price;}
    //earbuds
    if(p == 'Airpods pro 2'){price = 15;return price;}
    if(p == 'Airpods 3'){price = 18;return price;}
    if(p == 'T900 Ultra 2'){price = 15;return price;}
    if(p == 'Airpods 2'){price = 10;return price;}
    if(p == 'i11 Earbuds'){price = 7;return price;}
    if(p == 'Original Moxom Earbuds'){price = 20;return price;}
    if(p == 'M10 Earbuds'){price = 7;return price;}
    if(p == 'XO Orignal Earbuds'){price = 20;return price;}
    if(p == 'Galaxy Buds 2 Pro'){price = 15;return price;}
    //HeadSets
    if(p == 'A11 HEADSET'){price = 13;return price;}
    if(p == 'MOXOM Headset'){price = 23;return price;}
    if(p == 'Airpods Max'){price = 18;return price;}
    if(p == 'P90 HeadSet'){price = 6;return price;}
    if(p == 'JBL HeadSet'){price = 18;return price;}
    if(p == 'Green Lion HeadSet'){price = 27;return price;}
    if(p == 'Meetion Gaming HeadSet'){price = 27;return price;}
    if(p == 'P47m HeadSet'){price = 8;return price;}
    if(p == 'Monster Airmars N5 Lite'){price = 20;return price;}
    if(p == 'Original Trust Radius headset'){price = 20;return price;}
    if(p == 'Original Scorpion headset'){price = 15;return price;}
    //mouses
    if(p == 'Original Trust Gaming mouse'){price = 18;return price;}
    if(p == 'm305 mouse'){price = 4;return price;}
    if(p == 'm4 wireless mouse'){price = 6;return price;}
    if(p == 'Original moxom mouse'){price = 8;return price;}
    if(p == 'Wireless Kakusiga mouse'){price = 7;return price;}
    if(p == 'Original Gaming HP Mouse'){price = 16;return price;}
    if(p == 'Gaming Mouse 1'){price = 12;return price;}
    if(p == 'Gaming Mouse 2'){price = 15;return price;}
    //DistinctItems
    if(p == 'PS4 Controller'){price = 17;return price;}
    if(p == 'Q08 Gimbal Stabilizer'){price = 25;return price;}
    if(p == 'XO 2 in 1 desk lamp'){price = 13;return price;}
    if(p == 'XO Portable Shaver'){price = 15;return price;}
    if(p == 'Salem Pouch'){price = 18;return price;}
    if(p == 'Green Lion Elegant Pouch'){price = 25;return price;}
    if(p == 'Vintage T9 Shaver'){price = 6;return price;}
    if(p == 'VGR Shaver'){price = 15;return price;}
}

        