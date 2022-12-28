import type { NextPage } from 'next'
import Header from '../components/inicio/header/index'
import Principal from '../components/inicio/fundo/index'
import Section1 from '../components/inicio/section1/index'
import Section2 from '../components/inicio/section2/index'
import Footer from '../components/inicio/footer/index'


const Home: NextPage = () => {
  return (
      <>
        <Header />
        <Principal />
        <Section1 />
        <Section2 />
        <Footer />
      </>
  )
}

export default Home
