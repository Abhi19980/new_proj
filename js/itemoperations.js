const itemOperations = {
	itemList:[],
	id:1,	
	
	addItem(name,mail,pd){
		console.log("in itemop");
		
		var itemObject = new Item(this.id,name,mail,pd);
		this.itemList.push(itemObject);
		this.id++;

	}	
}