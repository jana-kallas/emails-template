import { Html } from "@react-email/components";
import { Tailwind } from "@react-email/tailwind";
import * as React from "react";
import Header from "../components/header";
import ContactBlock from "../components/contact-block";
import Divider from "../components/divider";
import Footer from "../components/footer";
import Welcome from "../components/welcome";
// eslint-disable-next-line @typescript-eslint/no-var-requires -- tailwind config is CJS
const tailwindConfig = require("../tailwind.config");
export default function Email() {
  return (
    <Tailwind config={tailwindConfig}>
      <Html>
        <div className="max-w-[600px] mx-auto" >
        <Header
            header ="https://i.ibb.co/R5mntKK/Email-1-EN.png"
          altText="Header"
        />
        <div className="px-3 font-public">
          <Welcome />
          <p >
           Please note that your Proof of Address is still pending. In line with our regulatory obligations, you are required to provide a valid Proof of Address issued within the last 3 months and under your own name.
          </p>
          <div className="mb-8">
            <span className="font-bold">Accepted documents include:</span>
            <ul>
              <li>Utility bill (electricity, water, gas)</li>
              <li>Telephone bill</li>
              <li>Bank Statement</li>
              <li>Insurance policy showing your residential address</li>
              <li>Municipality affidavit or government-issued letter</li>
            </ul>
            <p>You are kindly requested to submit the required document within 2 weeks from the date of this email. Failure to do so may result in restrictions on your account, including but not limited to close-only mode, withdrawal limitations, and potential account suspension or closure until the verification is completed.</p>
            <p>These measures are part of our standard KYC and AML/CFT compliance requirements.</p>
            <p>You may send your Proof of Address directly to <a href="mailto:cs@4t.com" className="no-underline text-black">cs@4t.com.</a></p>
          </div>
          <Divider />
            <ContactBlock  
                    contactText="If you need any assistance, please
                          do not hesitate to contact us
                          directly. We will be happy to help." />
          <Divider />
          <Footer
                        footer1="4T Global (Cyprus) LTD is the holding company owning the following companies:"
                        footer2="4T Limited is authorised and regulated by the Seychelles Financial Services Authority (FSA) under license
          number SD4 .058T Limited office is located in Seychelles, Mahe, Victoria, Olivier Maradan Building, 1st Floor
          +2484322955 . www.4T.com 4T Limited does not offer its services to the residents of certain jurisdictions. Please
          view the Restricted Countries"
                        footer3="4T Markets Limited is authorised and regulated by the Financial Conduct Authority – (FCA) FRN 4 .624225T
          Markets Limited is registered in England and Wales under Company No 08891879, with its registered address at:
          Office 3.15, St. Clement's House, 27 Clement's Lane, EC4N 7AE, London. www.4T.co.uk"
                        footer4="4T Global Markets Financial Services L.L.C licensed by the UAE Securities and Commodities Authority (SCA),
          License No: 20200000237."
                        footer5="4T Technology GmbH, Registration No. CHE-301.894.566, located at Hinterbergstrasse 6312 ,49 Steinhausen,
          ZUG Switzerland."
                        footer6="Contracts for Difference (CFDs) are leveraged products and can result in losses that exceed deposits. You
          should understand how leveraged trading works before taking the decision to invest in margin instruments.
          CFD trading carries a high level of risk and may not be suitable for everyone, so please ensure you fully
          understand the risks involved before trading."
                        rights="©4T 2025. All rights reserved."
                      />
        </div>
        </div>
      </Html>
    </Tailwind>
  );
}
