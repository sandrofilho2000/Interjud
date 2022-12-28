import type { NextPage } from "next";
import styled from "styled-components";
import fundo from "../../../../public/fundomenu.jpg";
import Image from "next/image";

const PrincipalWrapper = styled.div`
  display: flex;
  .buttonCredito {
    transition: 0.3s;
    border-radius: 5px;
    padding: 15px 20px;
    color: white;
    font-weight: 300;
    text-decoration: none;
    background-color: #004b9f;
    cursor: pointer;
    margin-top: -20px;
    margin-left: 25px;
    border: 0;
    width: 200px;
  }
  
  .btns {
    width: auto;
    height: 150px;
    display: flex;
    align-items: center;
    margin-left: -20px;
  }
  .buttonCredito:hover {
    background-color: #01418a;
  }
  .videoBackground {
    right: 0;
    bottom: 0;
    top: 0;
    height: 100%;
  }
  .section {
    height: 70vh;
    display: fixed;
    width: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #252525f8;
    z-index: 2;
    > h3 {
      max-width: 580px;
      width: 90%;
      height: 50px;
      font-size: 50px;
      color: #eee;
      margin-left: 100px;
      margin-top: 300px;
    }
  }
  .content {
  position: relative;
  width: auto;
  margin: 0 auto;
  }
  .content video {
      display: flex;
      height: 100%;
      width: 100%;
  }
  .content:before {
    content: '';
    position: absolute;
    background: rgba(0, 0, 0, 0.3);
    border-radius: 0px;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
  }

  .ovelayText{
    position:absolute;
    top:30%;
    left:13%;
    z-index:1;
    display: flex;
    justify-content: center;
    color: white;
    >div{
      >h3{
        
       font-size: 50px;
      }
    }
  }

  @media only screen and (max-width: 600px) {
    
    .btns{
      display: flex;
      flex-wrap: wrap;
      width: 240px;
      justify-content: center;
      align-items: center;
      padding-top: 75px;
      margin-top: -50px;
      margin-left: -60px;
        >button{
          font-size: 10px;
          width: 150px;
          height: 30px;
          justify-content: center;
          display: flex;
          align-items: center;
          
        }
    }
    .section{
      height: 25vh;
    }
    .ovelayText{
      width: 300px;
      display: flex;
      justify-content: center;
      margin-top: -110px;
      >div{
        >h3{
          font-size: 20px;
        }
      }
    }
    .content video{
       height: 100%;
       display: flex;
       justify-content: center;
       margin-top: 0px;
    }
}
`;

const Fundo: NextPage = () => {
  return (
    <PrincipalWrapper>
      <div className="section">
        <div className="ovelayText">
          <div>
          <h3>NEGOCIE SEU <br /> PROCESSO JUDICIAL</h3>
          <div className="btns">
            <button className="buttonCredito">VENDA SEU CRÉDITO</button>
            <button className="buttonCredito">COMPRE UM CRÉDITO</button>
          </div>
          </div>
        </div>
        <div className="content">
          <video autoPlay muted loop>
            <source
              src="./gif_4k.mp4"
              type="video/mp4"
            />
          </video>
        </div>
      </div>
    </PrincipalWrapper>
  );
};

export default Fundo;
