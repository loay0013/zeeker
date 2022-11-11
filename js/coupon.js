export default class coupon{
    constructor() {

            this.data ={
                password: 1717
            }

        this.rootElem = document.querySelector('.coupon');
    }

    async init(){
       await this.render();
    }
    async render() {
        const data = await this.getData();

        const row =document.createElement('div');
        row.classList.add('row');

        for(const  item of data){
            const col = document.createElement('div');
            col.classList.add('col-6');

            col.innerHTML= `
           
           
                                       
          `;
            row.appendChild(col);
        }
        this.rootElem.appendChild(row);
    }




    async getData(){
        const response = await fetch('api.php', {
            method:"POST",
            body: JSON.stringify(this.data)
        });
        return  await response.json();
    }
}
