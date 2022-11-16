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
        row.classList.add('row','g-4','pt-5');

        for(const  items of data){
            const col = document.createElement('div');
            col.classList.add('col-12', 'rounded-5');

            col.innerHTML= `
           
            <div class="col-12  bg-bodyrabatkode rounded-2 ">
                 <a  href="index.php?couponId=${items.couponId}" class="text-decoration-none text-dark">
                     <div class="col-12 p-3  bg-bodyrabatkode  d-flex flex-column  justify-content-center">
                            <p class="p-2"> Navn:${items.CouponNavn}</p>
                            <p class="p-2">CVR.nr:${items.CvrDiscount} </p>
                            <p class="p-2">Slut dato:${items.SlutDiscount}</p>
                             <p class="p-2">Rabatkode:${items.CouponCode}</p>
                     </div>                
                     
                 </a>
                 <div class="d-flex justify-content-end p-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18.03" height="24.04" viewBox="0 0 18.03 24.04">
                        <path id="Icon_awesome-clipboard" data-name="Icon awesome-clipboard" d="M18.03,5.259V21.786a2.254,2.254,0,0,1-2.254,2.254H2.254A2.254,2.254,0,0,1,0,21.786V5.259A2.254,2.254,0,0,1,2.254,3H6.01a3,3,0,0,1,6.01,0h3.756A2.254,2.254,0,0,1,18.03,5.259ZM9.015,1.878A1.127,1.127,0,1,0,10.142,3,1.127,1.127,0,0,0,9.015,1.878m4.507,5.353V6.292a.282.282,0,0,0-.282-.282H4.789a.282.282,0,0,0-.282.282v.939a.282.282,0,0,0,.282.282h8.451A.282.282,0,0,0,13.522,7.231Z" fill="#cdcecf"/>
                    </svg>
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
