

import React from "react";
export default function Header({header, altText}) {
    return(
        <>
        <div className="w-full">
            <img src={header} alt={altText} className="w-full" />
        </div>
        </>
    )

}