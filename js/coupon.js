export default class coupons{
    constructor() {

            this.data ={
                password: 1717
            }

        this.rootElem = document.querySelector('.coupons');
        this.items = this.rootElem.querySelector('.items');

    }

    async init(){
       await this.render();
    }
    async render() {
        const data = await this.getData();

        const row =document.createElement('div');
        row.classList.add('row','g-4');

        for(const  items of data){
            const col = document.createElement('div');
            col.classList.add('col-12');

            col.innerHTML= `
           
            <div class="col-12 pt-5 ">
                <div class="col-12 p-3  bg-box rounded-2 d-flex flex-column  justify-content-center">
                    <p class="p-2"> Navn:${items.CouponNavn}</p>
                    <p class="p-2">CVR.nr:${items.CvrDiscount} </p>
                    <p class="p-2">Slut dato:${items.SlutDiscount}</p>
                    <p class="p-2">Rabatkode:${items.CouponCode}</p>
                </div>
            </div>
           
                                       
          `;
            row.appendChild(col);
        }
        this.items.innerHTML='';
        this.items.appendChild(row);
    }




    async getData(){
        const response = await fetch('api.php', {
            method:"POST",
            body: JSON.stringify(this.data)
        });
        return  await response.json();
    }
}
