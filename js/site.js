$(document).ready(function() {
    const users = [];
    const displaySelectedUser = () => {}
    const letsCalculateBMI = () => {}
    const powerUpTheUI = () => {
        document.querySelector('.selectUser').addEventListener('change', displaySelectedUser);
        document.querySelector('#oracle').addEventListener('click', letsCalculateBMI);
    }
    //
    const displayUsers = users=> {
        var sel = document.querySelector('.selectUser');
        users.forEach(function(index) {
            var op = document.createElement('OPTION');
            op.innerHTML = index.name;
            var att = document.createAttribute('value');
            att.value= index.id;
            op.setAttributeNode(att);
            sel.append(op);
            
        }) 
    }
    const fetchAndDisplayUsers = () => {
        users.push({
            age:      57,
            weight:   89,
            height:   7,
            country: 'Nigeria',
            name:   'Charlie Obi',
            id:     'user_00001'
        });
        displayUsers(users);
    }
    
    const startApp = () => {
        fetchAndDisplayUsers();
    };

    startApp();
});