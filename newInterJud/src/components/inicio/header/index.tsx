
import type { NextPage } from 'next'
import styled from 'styled-components'

const HeaderWrapper = styled.div`

 .background { 
    background-color: #252525;
    display: flex;
    height:80px;
    padding: 10px 2%;
    justify-content:space-between;
 }
 
 .sectionSubHeader{
     right: 0;
     display: flex;
     justify-content:space-between;
     padding: 10px 2%;
     margin-top: 18px;

     >a{
        font-weight: bold;
        text-decoration: none;
        font-size: 13px;
        transition: 0.3s;
        color: white;
        cursor: pointer;
        font-family: 'Montserrat', sans-serif;
        padding-left: 20px;
    }  
 }
   .logoInterjud{
      width: 150px;
      height: 60px;
      object-fit: cover;
   }
   @media only screen and (max-width: 600px) {
      .sectionSubHeader{
         display: none;
      }
      .background{
         left: 0;
         right: 0;
         bottom: 0;
         top: 0;
      }
   }
`;

const Header: NextPage = () => {
    return (
      <HeaderWrapper>
          <div className='background'>
            <img
             src='./logo.png'
             alt="interjud.com.br"
             className='logoInterjud'
             />
             <div className='sectionSubHeader'>
                <a>CRÉDITOS</a>
                <a>SOBRE NÓS</a>
                <a>CONTATO</a>
                <a>LOGIN</a>
             </div>
          </div>
      </HeaderWrapper>
    )
  }
  
  export default Header
  