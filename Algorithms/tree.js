var arvore = {}

function insert(tree, value) {
	if(tree.value) {
		if(value > tree.value) {
			insert(tree.right, value);
		}
		else {
			insert(tree.left, value);
		}
	}
	else {
		tree.value = value;
		tree.left = {};
		tree.right = {};
	}
}

//Chamada
insert(arvore, 10);
console.log(arvore);

//Chamada
insert(arvore, 11);
console.log(arvore);
