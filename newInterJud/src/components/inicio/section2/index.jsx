import styled from 'styled-components'
import logo from '../../../../public/logo.png'
import Image from 'next/image'
import { useEffect, useRef, useState } from 'react';
import { FiPlus } from "react-icons/fi";

const Section2Wrapper = styled.div`

.videoAbout video{
    display: flex;
      height: 100%;
      width: 600px;
      padding-top: 30px;
      justify-content: center;
}

.about-faq{
    margin-left: 30px;
}

    .background { 
       background-color: #131313;
        padding: 15px 0;
        height: auto;
        box-sizing: content-box;
        padding-bottom: 50px;
        text-align: center;
        display: flex;
        align-content: center;
        flex-wrap:wrap;
    }
 
    .line{
        position: relative;
        text-align: left;
        margin: 0 auto 40px auto;
        margin-top: 80px;
        margin-bottom: 30px;
        width: 100%;
        color: white;
        height: 35px;
        position: relative;
        z-index: 4;
        margin-left: 10%;
        min-width: 320px;
        font-size: 25px;
        font-family: 'Montserrat', sans-serif;
        margin-left: 35%;
        white-space: pre;
    }  
    .line:before{
        content: '';
        height: 120px;
        width: 120px;
        position: absolute;
        left: -70px;
        top: -75px;
        border: 3px solid #02438c;
        z-index: -1;
    }
    .portalDiv{
        height: 0;
    }
    .question-section {
    background: transparent;
    border: 1px solid lightgray;
    border-radius: 8px;
    box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px,
        rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
    cursor: pointer;
    width: 500px;
    height: auto;
    font-size: 20px;
    color: white;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-top: 15px;
    }

    .question-align {
    align-items: center;
    display: flex;
    min-height: 10px;
    text-align: left;
    }

    .question-align h4 {
    margin-left: 8px;
    }

    .question-styling {
    font-size: 17px;
    width: 100%;
    }

    .question-icon {
    background: none;
    border: none;
    color: #177bee;
    cursor: pointer;
    font-size: 22px;
    margin-left: auto;
    margin-right: 8px;
    }

    .rotate {
    transform: rotate(45deg);
    }

    .answer-divider {
    border-top: 1px solid #177bee;
    padding-top: 10px;
    }

    .answer {
    margin-left: 8px;
    margin-right: 8px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.6s ease;
    text-align: left;
    }
  .container-faq{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      padding-top: 15%;
  }
  .feq-portal{
      >h3{
          color: white;
          font-size: 28px;
          font-family: 'Montserrat', sans-serif;
          padding-top: 11%;
      }
  }
  .btnCredito-faq{
    position: relative;
    z-index: 999999;
    transition: 0.3s;
    border-radius: 5px;
    padding: 15px 20px;
    color: white;
    font-weight: 300;
    text-decoration: none;
    background-color: #004b9f;
    letter-spacing: 2px;
    border: none;
    margin-top: 20px;
    font-size: 25px;
    font-family: 'Montserrat', sans-serif;
    font-weight: bolder;
  }
  .btnCredito-faq:hover{
    cursor: pointer;
    background-color: #023f85;
    color: #ffffffd3;
  }

  @media only screen and (max-width: 600px) {
    .videoAbout video{
       width: 100%;
       height: auto;
       margin-top: 150px;
       padding-left: 7px;
        padding-right: 7px;
    }   
    .container-faq-questions{
        width: 100%;
        height: auto;
        padding-top: 20px;
    }
    .about-faq{
        width: 100%;
        height: auto;
        margin-left: 0px;
        padding-left: 7px;
        padding-right: 7px;
    }
    .question-section{
        width: 100%;
        height: auto;
        font-size: 15px;
    }
    .question-icon{
       font-size: 30px;
    }
    .portalDiv{    
        padding: 10px 20%;
    }
    .btnCredito-faq{
        width: 300px;
    }
    .line{
        margin-left: 0;
        min-width: 0;
    }
  }
`;


const Section2 = () => {

    const [active1, setActive1] = useState(false);
    const [active2, setActive2] = useState(false);
    const [active3, setActive3] = useState(false);
    const [active4, setActive4] = useState(false);
    const [active5, setActive5] = useState(false);
    const contentRef1 = useRef(null);
    const contentRef2 = useRef(null);
    const contentRef3 = useRef(null);
    const contentRef4 = useRef(null);
    const contentRef5 = useRef(null);

    useEffect(() => {
        contentRef1.current.style.maxHeight = active1
            ? `${contentRef1.current.scrollHeight}px`
            : "0px";

        contentRef2.current.style.maxHeight = active2
            ? `${contentRef2.current.scrollHeight}px`
            : "0px";

        contentRef3.current.style.maxHeight = active3
            ? `${contentRef3.current.scrollHeight}px`
            : "0px";

        contentRef4.current.style.maxHeight = active4
            ? `${contentRef4.current.scrollHeight}px`
            : "0px";

        contentRef5.current.style.maxHeight = active5
            ? `${contentRef5.current.scrollHeight}px`
            : "0px";
    }, [contentRef1, active1, contentRef2, active2, contentRef3, active3, contentRef4, active4, contentRef5, active5]);

    const toggleAccordion1 = () => {
        setActive1(!active1);
        setActive2(false);
        setActive3(false);
        setActive4(false);
        setActive5(false);
    };
    const toggleAccordion2 = () => {
        setActive1(false);
        setActive2(!active2);
        setActive3(false);
        setActive4(false);
        setActive5(false);
    };

    const toggleAccordion3 = () => {
        setActive1(false);
        setActive2(false);
        setActive3(!active3);
        setActive4(false);
        setActive5(false);
    };

    const toggleAccordion4 = () => {
        setActive1(false);
        setActive2(false);
        setActive3(false);
        setActive4(!active4);
        setActive5(false);
    };

    const toggleAccordion5 = () => {
        setActive1(false);
        setActive2(false);
        setActive3(false);
        setActive4(false);
        setActive5(!active5);
    };

    return (
        <Section2Wrapper>
            <div className='background'>
                <div className='portalDiv'>
                    <h3 className='line'>
                        COMO <br /> FUNCIONA
                    </h3>
                </div>
                <div className='container-faq'>


                    <div className='videoAbout'>
                        <video autoPlay muted controls>
                            <source
                                src="./videoAbout.mp4"
                                type="video/mp4"
                            />
                        </video>
                    </div>


                    <div className='container-faq-questions'>
                        <div className='about-faq'>
                            <button
                                className={`question-section ${active1}`}
                                onClick={toggleAccordion1}
                            >
                                <div>
                                    <div className="question-align">
                                        <h4 className="question-style">
                                            1º CADASTRO
                                        </h4>
                                        <FiPlus
                                            className={active1 ? `question-icon rotate` : `question-icon`}
                                        />
                                    </div>
                                    <div
                                        ref={contentRef1}
                                        className={active1 ? `answer answer-divider` : `answer`}
                                    >
                                        <p>Preencha seus dados pessoais e os dados do processo a ser negociado, com as informações mais fiéis possíveis. Se necessário, contate seu advogado. Você pode optar por aderir GRATUITAMENTE ao serviço de avaliação de risco
                                        </p>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div className='about-faq'>
                            <button
                                className={`question-section ${active2}`}
                                onClick={toggleAccordion2}
                            >
                                <div>
                                    <div className="question-align">
                                        <h4 className="question-style">
                                            2º CRÉDITO DISPONIVEL NO MARKETPLACE
                                        </h4>
                                        <FiPlus
                                            className={active2 ? `question-icon rotate` : `question-icon`}
                                        />
                                    </div>
                                    <div
                                        ref={contentRef2}
                                        className={active2 ? `answer answer-divider` : `answer`}
                                    >
                                        <p>Pronto! Seu crédito já está disponível no PRIMEIRO marketplace de crédito judiciais do Brasil. Agora é só aguardar o contato com a melhor proposta.
                                        </p>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div className='about-faq'>
                            <button
                                className={`question-section ${active3}`}
                                onClick={toggleAccordion3}
                            >
                                <div>
                                    <div className="question-align">
                                        <h4 className="question-style">
                                            3º NEGOCIAÇÃO
                                        </h4>
                                        <FiPlus
                                            className={active3 ? `question-icon rotate` : `question-icon`}
                                        />
                                    </div>
                                    <div
                                        ref={contentRef3}
                                        className={active3 ? `answer answer-divider` : `answer`}
                                    >
                                        <p>Interessados entrarão em contato por meio da plataforma. Disponibilizamos um chat interno para vocês negociarem de forma livre e direta o valor e as condições do negócio, desde que dentro dos parâmetros legais e dos termos e condições da INTERJUD.
                                        </p>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div className='about-faq'>
                            <button
                                className={`question-section ${active4}`}
                                onClick={toggleAccordion4}
                            >
                                <div>
                                    <div className="question-align">
                                        <h4 className="question-style">
                                            4º CESSÃO DE DIREITOS
                                        </h4>
                                        <FiPlus
                                            className={active4 ? `question-icon rotate` : `question-icon`}
                                        />
                                    </div>
                                    <div
                                        ref={contentRef4}
                                        className={active4 ? `answer answer-divider` : `answer`}
                                    >
                                        <p>Após aceitar a proposta, a equipe da INTERJUD elaborará um contrato de cessão de direitos inteiramente digital, no qual as parte e o advogado do vendedor devem assinar de forma eletrônica, inclusive pelo próprio celular.
                                        </p>
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div className='about-faq'>
                            <button
                                className={`question-section ${active5}`}
                                onClick={toggleAccordion5}
                            >
                                <div>
                                    <div className="question-align">
                                        <h4 className="question-style">
                                            5º HOMOLOGAÇÃO E PAGAMENTO
                                        </h4>
                                        <FiPlus
                                            className={active5 ? `question-icon rotate` : `question-icon`}
                                        />
                                    </div>
                                    <div
                                        ref={contentRef5}
                                        className={active5 ? `answer answer-divider` : `answer`}
                                    >
                                        <p>Após a homologação, o dinheiro é liberado ao vendedor. Porém, caso a transação não ocorra por algum motivo, o negócio é desfeito sem qualquer ônus para as partes.
                                        </p>
                                    </div>
                                </div>
                            </button>
                        </div>


                    </div>
                    <div className='feq-portal'>
                    <h3>
                     GARANTA AGORA SEU DIREITO E ANTECIPE SEUS <br />
                     SONHOS COM A INTERJUD
                    </h3>
                    <button className='btnCredito-faq'>CADASTRE SEU CRÉDITO</button>
                 
                  </div>
                </div>

              

            </div>



        </Section2Wrapper>
    )
}

export default Section2
