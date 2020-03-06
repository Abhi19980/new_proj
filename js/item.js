class Item{

    constructor(id,name,mail,pd){
        console.log("in item");
        
        this.id = id;
        this.name = name;
        this.mail = mail;
        this.pd = pd;
        this.markForDelete = false;

    }
    toggleDelete() {
        this.markForDelete = !this.markForDelete;
    }

}

// class Item {
// constructor(id, product, quantity, amount) {
//     this.id = id;
//         this.product = product;
//         this.quantity = quantity;
//         this.amount = amount;
//         this.markForDelete = false;

//     }
//     toggleDelete() {
//         this.markForDelete = !this.markForDelete;
//     }
// }