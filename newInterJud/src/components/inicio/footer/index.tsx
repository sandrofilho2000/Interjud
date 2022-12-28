
import type { NextPage } from 'next'
import styled from 'styled-components'
import logo from '../../../../public/logo.png'
import Image from 'next/image'

const FooterWrapper = styled.div`

 .background { 
    background-color: #050505;
    display: flex;
    height:80px;
    bottom:0;
    padding: 10px 2%;
    
    >a{
        font-weight: bold;
        text-decoration: none;
        font-size: 13px;
        transition: 0.3s;
        color: white;
        cursor: pointer;
        font-family: 'Montserrat', sans-serif;
        padding-left: 20px;
        margin-top: 30px;
    }  
    
 }
`;

const Footer: NextPage = () => {
    return (
      <FooterWrapper>
          <div className='background'>
            <a>CRÉDITOS</a>
            <a>SOBRE NÓS</a>
            <a>CONTATO</a>
            <a>LOGIN</a>
             {/*<Image
             src={logo}
             alt="interjud.com.br"
             width="140"
             height="100"
             objectFit="cover"
             />*/}
          </div>
      </FooterWrapper>
    )
  }
  
  export default Footer
  