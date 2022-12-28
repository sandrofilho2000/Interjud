import styled from 'styled-components'
import dynamic from 'next/dynamic';
import logo from '../../../../public/logo.png'
import Image from 'next/image'
import { useEffect, useState } from 'react';
import { Icon } from '@iconify/react';
import { stringify } from 'querystring';
import { Navigation, Pagination, Scrollbar, A11y } from 'swiper';
import { Swiper, SwiperSlide } from 'swiper/react';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';
const SectionWrapper = styled.div`

    .background { 
        background: linear-gradient(60deg, rgb(10, 10, 10) 55%, rgba(36,36,36,1) 60%, rgba(36,36,36,1) 99%);
        padding: 0px 0;
        height: 700px;
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
        margin-left: 65%;
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

    .flip-container {
    width: 200px;
    height: 350px;
    perspective: 1000px;
    margin-left: 80px;
    margin-top: 100px;
}

.flipper {
  position: relative;
	width: 100%;
	height: 100%;
  transition: transform 0.8s;
	transform-style: preserve-3d;
}

.flip-container:hover .flipper{
	transform: rotateY(180deg);
}

.front{
  position: absolute;
  height: 100%;
  backface-visibility: hidden;
}

.back{
  transform: rotateY(180deg);
  backface-visibility: hidden;
  >div{
    >a{
            text-align: center;
            width: 156px;
            display: inline-flex;
            white-space: nowrap;
            color: white;
            justify-content: center;
            font-size: 14px;
            margin-top: 60%;
            z-index: 999999;
            transition: 0.3s;
            border-radius: 5px;
            padding: 15px 20px;
            font-weight: 300;
            text-decoration: none;
            background-color: #004b9f;
        }
  }
}
.frontCard{
    border-radius: 20px;
    background-size: cover;
    display: block;
    background-position: center;
    background-repeat: no-repeat;
    >p{
        z-index: 50;
        display: block;
        color: white;
        font-size: 23px;
        width: 90%;
        margin-left: auto;
        margin-right: auto;
        font-weight: bold;
    }
}
.singleCard{
  border-radius: 8px;
  cursor: pointer;
}

.overlay{
    content: '';
    position: absolute;
    background: rgba(0, 0, 0, 0.5);
    border-radius: 8px;
    width: 250px;
    height: 350px;
}

.backSingleCard{
    background-image: url('./default-back.png');
    background-repeat: no-repeat;
    background-size: cover;
    width: 250px;
    height: 350px;
    border-radius: 8px;
}

.boldTextCredits{
    width: 250px;
    height: 350px;
    border-radius: 8px;
    padding-top: 30px;
}
.BolderText{
    padding-top: 20px;
}
.displayCard{
    display: flex;
    justify-content: center;
}
.creditSingle{
    justify-content: center;
    display: flex;
    align-items: center;
}
.portalDiv{
    height: 0;
}
.starsCredit{
      width: 100%;
      height: 35px;
      padding-left: 10px;
      padding-right: 10px;
  }

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
    margin-left: -20px;
  }
  .buttonCredito:hover {
    background-color: #01418a;
  }
  
.swiper{
    width:100%;
    max-width:800px;
}

.carouselCredit{
    .swiper-pagination-bullet{
        background: white;
    }
}

@media only screen and (max-width: 600px) {
  .creditSingle{
    justify-content: center;
    align-items: center;
    display: center;
    margin-left: 0;
  }
  .portalDiv{    
        padding: 10px 40%;
        padding-top: 10px;
        padding-left: 0px;
  }
  .line{
        margin-left: 0;
        min-width: 0;
    }
  .line{
      margin-left: 100px;
  }
  .flip-container{
      width: 240px;
  }
  .swiper-slide{
      width: 100%;
  }
  .boldTextCredits{
      width: 100%;
  }
}
`;


const Section1 = () => {
    let array = []

    const [credit1, setCredit1] = useState({})
    const [credit2, setCredit2] = useState({})
    const [credit3, setCredit3] = useState({})
    const [credit4, setCredit4] = useState({})
    const [star1, setStar1] = useState('./rating_0.0.jpg')
    const [star2, setStar2] = useState('./rating_0.0.jpg')
    const [star3, setStar3] = useState('./rating_0.0.jpg')
    const [star4, setStar4] = useState('./rating_0.0.jpg')
    const [backgroundCard1, setBackgroundCard1] = useState('./default.png')
    const [backgroundCard2, setBackgroundCard2] = useState('./default.png')
    const [backgroundCard3, setBackgroundCard3] = useState('./default.png')
    const [backgroundCard4, setBackgroundCard4] = useState('./default.png')
    const [mode, setMode] = useState(2)

    useEffect(() => {
        fetch('https://interjud.herokuapp.com/mostrarCreditos', {
            headers: {
                'Content-Type': 'Application/json'
            }
        }).then(res => res.json())
            .then(data => {
                data.response.forEach((e) => {
                    if (e.rating !== null) {
                        array.push(e)
                    }
                });
                //  console.log('teste', array[3].background)
                if (array[0] !== undefined) {
                    setCredit1(array[0])
                    setBackgroundCard1(array[0].background)
                    switch (true) {
                        case array[0].rating === 0.5:
                            setStar1('./rating_0.5.jpg')
                            break;
                        case array[0].rating === 1.0:
                            setStar1('./rating_1.0.jpg')
                            break;
                        case array[0].rating === 1.5:
                            setStar1('./rating_0.5.jpg')
                            break;
                        case array[0].rating === 2.0:
                            setStar1('./rating_2.0.jpg')
                            break;
                        case array[0].rating === 2.5:
                            setStar1('./rating_2.5.jpg')
                            break;
                        case array[0].rating === 3.0:
                            setStar1('./rating_3.0.jpg')
                            break;
                        case array[0].rating === 3.5:
                            setStar1('./rating_3.5.jpg')
                            break;
                        case array[0].rating === 4.0:
                            setStar1('./rating_4.0.jpg')
                            break;
                        case array[0].rating === 4.5:
                            setStar1('./rating_4.5.jpg')
                            break;
                        case array[0].rating === 5.0:
                            setStar1('./rating_5.0.jpg')
                            break;
                        default:
                            break;
                    }
                }
                if (array[1] !== undefined) {
                    setCredit2(array[1])
                    setBackgroundCard2(array[1].background)
                    switch (true) {
                        case array[1].rating === 0.5:
                            setStar2('./rating_0.5.jpg')
                            break;
                        case array[1].rating === 1.0:
                            setStar2('./rating_1.0.jpg')
                            break;
                        case array[1].rating === 1.5:
                            setStar2('./rating_0.5.jpg')
                            break;
                        case array[1].rating === 2.0:
                            setStar2('./rating_2.0.jpg')
                            break;
                        case array[1].rating === 2.5:
                            setStar2('./rating_2.5.jpg')
                            break;
                        case array[1].rating === 3.0:
                            setStar2('./rating_3.0.jpg')
                            break;
                        case array[1].rating === 3.5:
                            setStar2('./rating_3.5.jpg')
                            break;
                        case array[1].rating === 4.0:
                            setStar2('./rating_4.0.jpg')
                            break;
                        case array[1].rating === 4.5:
                            setStar2('./rating_4.5.jpg')
                            break;
                        case array[1].rating === 5.0:
                            setStar2('./rating_5.0.jpg')
                            break;
                        default:
                            break;
                    }
                }
                if (array[2] !== undefined) {
                    setCredit3(array[2])
                    setBackgroundCard3(array[2].background)
                    switch (true) {
                        case array[2].rating === 0.5:
                            setStar3('./rating_0.5.jpg')
                            break;
                        case array[2].rating === 1.0:
                            setStar3('./rating_1.0.jpg')
                            break;
                        case array[2].rating === 1.5:
                            setStar3('./rating_0.5.jpg')
                            break;
                        case array[2].rating === 2.0:
                            setStar3('./rating_2.0.jpg')
                            break;
                        case array[2].rating === 2.5:
                            setStar3('./rating_2.5.jpg')
                            break;
                        case array[2].rating === 3.0:
                            setStar3('./rating_3.0.jpg')
                            break;
                        case array[2].rating === 3.5:
                            setStar3('./rating_3.5.jpg')
                            break;
                        case array[2].rating === 4.0:
                            setStar3('./rating_4.0.jpg')
                            break;
                        case array[2].rating === 4.5:
                            setStar3('./rating_4.5.jpg')
                            break;
                        case array[2].rating === 5.0:
                            setStar3('./rating_5.0.jpg')
                            break;
                        default:
                            break;
                    }
                }
                if (array[3] !== undefined) {
                    setCredit4(array[3])
                    setBackgroundCard4(array[3].background)
                    switch (true) {
                        case array[3].rating === 0.5:
                            setStar4('./rating_0.5.jpg')
                            break;
                        case array[3].rating === 1.0:
                            setStar4('./rating_1.0.jpg')
                            break;
                        case array[3].rating === 1.5:
                            setStar4('./rating_0.5.jpg')
                            break;
                        case array[3].rating === 2.0:
                            setStar4('./rating_2.0.jpg')
                            break;
                        case array[3].rating === 2.5:
                            setStar4('./rating_2.5.jpg')
                            break;
                        case array[3].rating === 3.0:
                            setStar4('./rating_3.0.jpg')
                            break;
                        case array[3].rating === 3.5:
                            setStar4('./rating_3.5.jpg')
                            break;
                        case array[3].rating === 4.0:
                            setStar4('./rating_4.0.jpg')
                            break;
                        case array[3].rating === 4.5:
                            setStar4('./rating_4.5.jpg')
                            break;
                        case array[3].rating === 5.0:
                            setStar4('./rating_5.0.jpg')
                            break;
                        default:
                            break;
                    }
                }
            })
            if (screen.width < 640 || screen.height < 480) {
                // sirva a versão pra celular
                setMode(1)
            } else if (screen.width < 1024 || screen.height < 768) {
                // talvez seja uma boa usar versão pra tablet
                setMode(1)
            } else {
                // sirva a versão normal
                setMode(2)
            }
    }, [])

    return (
        <SectionWrapper>
            <div className='background'>
                <div className='portalDiv'>
                    <h3 className='line'>
                        PORTAL <br /> DE CRÉDITO
                    </h3>
                </div>

                <div className='displayCard'>
                    <Swiper
                       // install Swiper modules
                        modules={[Navigation, Pagination, Scrollbar, A11y]}
                        spaceBetween={0}
                        slidesPerView={mode}
                        navigation
                        pagination={{ clickable: true }}
                        scrollbar={{ draggable: true }}
                        onSwiper={(swiper) => console.log(swiper)}
                        onSlideChange={() => console.log('slide change')}
                        className="carouselCredit"
                    >
                        <div className='creditSingle'>

                            {credit1 !== undefined ?
                            <SwiperSlide>
                                <div className="flip-container">
                                    <div className="flipper">
                                        <div className="front">
                                            <div className='singleCard'>
                                                <div style={{ 'backgroundImage': `url(${backgroundCard1})`, backgroundPosition: 'center', backgroundRepeat: 'no-repeat', backgroundSize: 'cover' }} className='overlay boldTextCredits frontCard'>
                                                    <img
                                                        src={star1}
                                                        className='starsCredit'
                                                    />
                                                    <p className='BolderText'>{credit1.nome}</p>
                                                    <p className='BolderText'>Valor</p>
                                                    <p>{credit1.valor}</p>
                                                    <p className='BolderText'>Classe</p>
                                                    <p>{credit1.classe}</p>
                                                </div>
                                            </div>
                                        </div>
                                            <div className="back">
                                                <div className='backSingleCard'>
                                                    <a href="https://www.interjud.com.br/login">Fazer Proposta</a>
                                                </div>
                                            </div>
                                    </div>
                                    </div>
                                </SwiperSlide>
                               
                                : ''
                            }
                            {credit2 !== undefined ?
                            <SwiperSlide>
                                <div className="flip-container">
                                    <div className="flipper">
                                        <div className="front">
                                            <div className='singleCard'>

                                                <div style={{ 'backgroundImage': `url(${backgroundCard2})`, backgroundPosition: 'center', backgroundRepeat: 'no-repeat', backgroundSize: 'cover' }} className='overlay boldTextCredits frontCard'>
                                                    <img
                                                        src={star2}
                                                        className='starsCredit'
                                                    />
                                                    <p className='BolderText'>{credit2.nome}</p>
                                                    <p className='BolderText'>Valor</p>
                                                    <p>{credit2.valor}</p>
                                                    <p className='BolderText'>Classe</p>
                                                    <p>{credit2.classe}</p>
                                                </div>
                                            </div>
                                        </div>
                                            <div className="back">
                                                <div className='backSingleCard'>
                                                    <a href="https://www.interjud.com.br/login">Fazer Proposta</a>
                                                </div>
                                            </div>
                                    </div>
                                    </div>
                                </SwiperSlide>
                                
                                : ''
                            }
                            {credit3 !== undefined ?
                          <SwiperSlide>
                                <div  className="flip-container">
                                    <div className="flipper">
                                        <div className="front">
                                            <div className='singleCard'>
                                                <div style={{ 'backgroundImage': `url(${backgroundCard3})`, backgroundPosition: 'center', backgroundRepeat: 'no-repeat', backgroundSize: 'cover' }} className='overlay boldTextCredits frontCard'>
                                                    <img
                                                        src={star3}
                                                        className='starsCredit'
                                                    />
                                                    <p className='BolderText'>{credit3.nome}</p>
                                                    <p className='BolderText'>Valor</p>
                                                    <p>{credit3.valor}</p>
                                                    <p className='BolderText'>Classe</p>
                                                    <p>{credit3.classe}</p>
                                                </div>
                                            </div>
                                        </div>
                                            <div className="back">
                                                <div className='backSingleCard'>
                                                    <a href="https://www.interjud.com.br/login">Fazer Proposta</a>
                                                </div>
                                            </div>
                                    </div>
                                    </div>
                                </SwiperSlide>
                                : ''
                            }
                            {credit4 !== undefined ?
                                <SwiperSlide>
                                <div className="flip-container">
                                    <div className="flipper">
                                        <div className="front">
                                            <div className='singleCard'>
                                                <div style={{ backgroundImage: `url(${backgroundCard4})`, backgroundPosition: 'center', backgroundRepeat: 'no-repeat', backgroundSize: 'cover' }} className='overlay boldTextCredits frontCard'>
                                                    <img
                                                        src={star4}
                                                        className='starsCredit'
                                                    />
                                                    <p className='BolderText'>{credit4.nome}</p>
                                                    <p className='BolderText'>Valor</p>
                                                    <p>{credit4.valor}</p>
                                                    <p className='BolderText'>Classe</p>
                                                    <p>{credit4.classe}</p>
                                                </div>
                                            </div>
                                        </div>
                                            <div className="back">
                                                <div className='backSingleCard'>
                                                    <a href="https://www.interjud.com.br/login">Fazer Proposta</a>
                                                </div>
                                            </div>
                                    </div>
                                    </div>
                                </SwiperSlide>
                                : ''
                            }
                        </div>
                    </Swiper>
                </div>
                {/*<div className='btns'>
                    <button type='button' className='buttonCredito' >IR PARA O PORTAL</button>
                        </div>*/}
            </div>
        </SectionWrapper>
    )
}

export default Section1
