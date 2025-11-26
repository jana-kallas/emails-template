import { Html } from "@react-email/components";
import { Tailwind } from "@react-email/tailwind";
import * as React from "react";
import Header from "../components/header";
import ContactBlock from "../components/contact-block";
import Divider from "../components/divider";
import Footer from "../components/footer";
// eslint-disable-next-line @typescript-eslint/no-var-requires -- tailwind config is CJS
const tailwindConfig = require("../tailwind.config");
export default function Email() {
  return (
    <Tailwind config={tailwindConfig}>
      <Html className="max-w-[700px] mx-auto">
        <Header
          header="https://i.ibb.co/N2ncnSgk/provide-poa-en.webp"
          altText="POA Header"
        />
        <div className="px-6 font-public">
          <p >
            The deadline to submit your Proof of Address has now passed, and we
            have not received the required documentation. As a result and in line
            with our regulatory obligations, your trading account has been
            restricted until a valid Proof of Address is provided.
          </p>
          <p>
          The restrictions applied may include, but are not limited to close-only mode, withdrawal limitations, and
          potential account suspension or closure if the document remains outstanding.
          </p>
          <p>
          To remove these restrictions, you are urgently required to submit a valid Prood of Address issued within
          the last 3 months and under your own name.
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
            <p>Please send your Proof of Address directly to <a href="mailto:cs@4t.com" className="no-underline text-black">cs@4t.com</a> at your earliest convenience. Once received
            and verified, all restrictions will be lifted accordingly.</p>
          </div>
          <Divider />
          <ContactBlock />
          <Divider />
          <Footer />
        </div>
      </Html>
    </Tailwind>
  );
}
